@extends('layouts.checkout')
@section('title','Checkout')

@section('content')
<main>
    <!-- Header -->
    <nav aria-label="breadcrumb" class="navb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('detail',$item->travel_package->slug)}}">Detail Packet</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
        </div>
    </nav>
    <!-- content -->
    <div class="container">
        <section class="details-checkout-content">
            <div class="row">
                <div class="col-md-8 col-12 checkout-left">
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <h2>Who's going?</h2>
                    <p>Trip to {{$item->travel_package->title}}, {{$item->travel_package->location}}</p>

                    <table class="table table-responsive-sm">
                        <thead>
                            <tr>
                                <th class="text-center">Pictures</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Nationality</th>
                                <th class="text-center">Visa</th>
                                <th class="text-center">Passport</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($item->details as $detail)
                            <tr>
                                <td class="text-center">
                                    <img src="https://ui-avatars.com/api/?name={{$detail->username}}" alt="" class="rounded-circle">
                                </td>
                                <td class="text-center align-middle">
                                    {{$detail->username}}
                                </td>
                                <td class="text-center align-middle">
                                    {{$detail->nationality}}
                                </td>
                                <td class="text-center align-middle">
                                    {{$detail->is_visa ? '30 Days' : 'N/A'}}
                                </td>
                                <td class="text-center align-middle">
                                    {{\Carbon\Carbon::createFromDate($detail->doe_passport) > \Carbon\Carbon::now() ? 'Active' : 'Inactive'}}
                                </td>
                                <td class="text-center align-middle">
                                    <a href="{{route('checkout-remove', $detail->id)}}" class="btn">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                            @empty
                                <tr colspan="6" class="text-center">
                                    No Visitor
                                </tr>
                            @endforelse
                        </tbody>

                    </table>

                    <h3>Add Member</h3>
                    <form action="{{route('checkout-create',$item->id)}}" class="form-inline" method="POST" >
                        @csrf
                        <label for="username" class="sr-only">Username</label>
                        <input type="text"
                        name="username"
                        id="username"
                        required
                        placeholder="Username"
                            class="form-control mb-2 mr-sm-2">

                        <label for="nationality" class="sr-only">Nationality</label>
                        <input type="text" name="nationality" id="nationality" placeholder="Nationality" required
                        style="width:50px;"
                            class="form-control mb-2 mr-sm-2">

                        <label for="is_visa" class="sr-only">VISA</label>
                        <select name="is_visa" id="is_visa" class="custom-select mb-2 mr-sm-2">
                            <option value="">VISA</option>
                            <option value="1">30 days</option>
                            <option value="0">N/A</option>
                        </select>

                        <label for="doe_passport" class="sr-only">DOE Passport</label>
                        <div class="input-group mb-2 mr-sm-2">
                            <input type="text" class="form-control datepicker" id="doePassport"
                                placeholder="DOE passport" name="doe_passport">
                        </div>

                        <button type="submit" class="btn btn-add-now mb-2 px-4">
                            Add now
                        </button>
                    </form>

                    <div class="alert mt-2 alert-primary" style="height: auto; padding: 10px;" role="alert">
                        <h3>Note : </h3>
                        <p>You are onlyable to invite member that has registered in NusaTour</p>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="card card-detail card-right">
                        <h2>Checkout Information</h2>
                        <table class="trip-informations">
                            <tr>
                                <th width="50%">Members</th>
                                <td width="50%" class="text-right">
                                    {{$item->details->count()}} person
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Additional VISA</th>
                                <td width="50%" class="text-right">
                                    ${{$item->additional_visa}},00
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Trip Price</th>
                                <td width="50%" class="text-right">
                                    ${{$item->travel_package->price}},00 / person
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Sub Total</th>
                                <td width="50%" class="text-right">
                                    ${{$item->transaction_total}},00 / person
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Total (+Unique Code)</th>
                                <td width="50%" class="text-right">
                                    <span class="blue">${{$item->transaction_total}},</span><span class="orange">{{mt_rand(0,99)}}</span>
                                </td>
                            </tr>
                        </table>
                        <hr>
                        <h2>Payments Instruction</h2>
                        <p>Please complete your payment before you going to trip</p>
                        <div class="card-payment">
                            <img src="{{url('frontend/images/logo bank@2x.jpg')}}" alt="">
                            <div class="text">
                                <h5>PT Nusa Tour</h5>
                                <p>Bank Central Java</p>
                                <p>0271-222-329</p>
                            </div>
                        </div>
                        <div class="card-payment">
                            <img src="{{url('frontend/images/logo bank@2x.jpg')}}" alt="">
                            <div class="text">
                                <h5>PT Syariah Mandiri</h5>
                                <p>Bank Central Java</p>
                                <p>0271-233-329</p>
                            </div>
                        </div>
                    </div>
                    <div class="join-container">
                        <a href="{{route('checkout-success', $item->id)}}" class="btn btn-block btn-join-now mt-3 py-2">
                            I Have Made Payment
                        </a>
                        <a href="{{route('detail',$item->travel_package->slug)}}" class="btn btn-block btn-cancel mt-3 py-2">
                            Cancel
                        </a>
                    </div>

                </div>
            </div>
        </section>
    </div>

</main>
@endsection


@push('prepend-style')
<link rel="stylesheet" href="{{url('frontend/libraries/gijgo-master/dist/combined/css/gijgo.min.css')}}">
@endpush

@push('addon-script')
<script src="{{url('frontend/libraries/gijgo-master/dist/combined/js/gijgo.min.js')}}"></script>

<script>
$(document).ready(function() {
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        uiLibrary: 'bootstrap4',
        icons: {
            rightIcon: '<img src="/frontend/images/Calender.jpg" height="20px" />'
        }
    });
});
</script>
















<script src="https://kit.fontawesome.com/3e89cfe6ad.js" crossorigin="anonymous"></script>
@endpush
