<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TravelPackage;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Carbon\Carbon;
use illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index(Request $request, $id)
    {
        $item = Transaction::with(['details', 'travel_package', 'user'])
            ->findOrFail($id);
        return view('pages.checkout', [
            'item' => $item
        ]);
    }
    public function process(Request $request, $id)
    {
        // Mencari data travel package kalau ada akan menampilkan datanya kalau tidak ada muncul 404
        $travel_package = TravelPackage::findOrFail($id);

        // Membuat data transaksi id,user_id, visa, transaction total berdasrakan harga, dan transacsi status INCART
        $transaction = Transaction::create([
            'travel_packages_id' => $id,
            'users_id' => Auth::user()->id,
            'additional_visa' => 0,
            'transaction_total' => $travel_package->price,
            'transaction_status' => 'IN_CART',
        ]);

        // membuat transaction detail, untuk diri sendiri
        TransactionDetail::create([
            'transactions_id' => $transaction->id,
            'username' => Auth::user()->username,
            'nationality' => 'ID',
            'is_visa' => false,
            'doe_passport' => Carbon::now()->addYears(5)
        ]);

        // setelah berhasil maka akan di kembalikan ke checkout
        return redirect()->route('checkout', $transaction->id);
    }
    public function create(Request $request, $id)
    {
        // memvalidasi data
        $request->validate([
            'username' => 'required|string|exists:users,username',
            'is_visa' => 'required|boolean',
            'doe_passport' => 'required'
        ]);

        // mengambil semua data yang sudah direquest
        $data = $request->all();
        // mencocokan id transaksi
        $data['transactions_id'] = $id;

        // membuat data transaksi detail
        TransactionDetail::create($data);

        // mencari data travel package yang berdasarkan table transaction berdasarkan id
        $transaction = Transaction::with(['travel_package'])->find($id);

        // memvalidasi data is_visa kalau true maka data nya ditambahkan 190
        if ($request->is_visa) {
            $transaction->transaction_total += 190;
            $transaction->additional_visa += 190;
        }
        $transaction->transaction_total += $transaction->travel_package->price;

        $transaction->save();
        return redirect()->route('checkout', $id);
    }
    public function success(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->transaction_status = 'PENDING';

        $transaction->save();

        return view('pages.success');
    }
    public function remove(Request $request, $detail_id)
    {
        // memasukkan variable yang didalamnya mencari data transaksi detail berdasarkan detail id
        $item = TransactionDetail::findOrFail($detail_id);

        // memasukkan variable yang didalamnya mencari data berdasarkan function details dan travel_package berdasarkan transaksi id $item
        $transaction = Transaction::with(['details', 'travel_package'])->findOrFail($item->transactions_id);

        // memvalidasi is_visa,apabila true maka pembayaran berkurang
        if ($item->is_visa) {
            $transaction->transaction_total -= 190;
            $transaction->additional_visa -= 190;
        }
        // mentotal transaksi
        $transaction->transaction_total -= $transaction->travel_package->price;

        $transaction->save();
        $item->delete();

        return redirect()->route('checkout', $item->transactions_id);
    }
}