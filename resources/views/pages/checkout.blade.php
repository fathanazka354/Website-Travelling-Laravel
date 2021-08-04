@extends('layouts.checkout')
@section('title','Checkout')

@section('content')
<main>
    <!-- Header -->
    <nav aria-label="breadcrumb" class="navb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('detail')}}">Detail Packet</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
        </div>
    </nav>
    <!-- content -->
    <div class="container">
        <section class="details-checkout-content">
            <div class="row">
                <div class="col-md-8 col-12 checkout-left">
                    <h2>Who's going?</h2>
                    <p>Trip to Ubud, Bali</p>

                    <table class="table table-responsive-sm">
                        <tr>
                            <th class="text-center">Pictures</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Nationality</th>
                            <th class="text-center">Visa</th>
                            <th class="text-center">Passport</th>
                            <th class="text-center">Action</th>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <img src="{{url('frontend/images/member/Mask Group 15@2x.jpg')}}" alt="">
                            </td>
                            <td class="text-center align-middle">Fathan Azka</td>
                            <td class="text-center align-middle">Indonesia</td>
                            <td class="text-center align-middle">N/A</td>
                            <td class="text-center align-middle">Active</td>
                            <td class="text-center align-middle">
                                <a href="" class="btn">
                                    <i class="fas fa-times"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <img src="{{url('frontend/images/member/Mask Group 16@2x.jpg')}}" alt="">
                            </td>
                            <td class="text-center align-middle">Ibnu Fajar</td>
                            <td class="text-center align-middle">Indonesia</td>
                            <td class="text-center align-middle">30 days</td>
                            <td class="text-center align-middle">Active</td>
                            <td class="text-center align-middle">
                                <a href="" class="btn">
                                    <i class="fas fa-times"></i>
                                </a>
                            </td>
                        </tr>
                    </table>

                    <h3>Add Member</h3>
                    <form action="" class="form-inline">
                        <label for="inputUsername" class="sr-only">Username</label>
                        <input type="text" name="inputUsername" id="inputUsername" placeholder="username"
                            class="form-control mb-2 mr-sm-2">

                        <label for="inputvisa" class="sr-only">VISA</label>
                        <select name="inputVisa" id="inputVisa" class="custom-select mb-2 mr-sm-2">
                            <option value="VISA">VISA</option>
                            <option value="30 days">30 days</option>
                            <option value="N/A">N/A</option>
                        </select>

                        <label for="doePassport" class="sr-only">DOE Passport</label>
                        <div class="input-group mb-2 mr-sm-2">
                            <input type="text" class="form-control datepicker" id="doepassport"
                                placeholder="DOE passport">
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
                                    2 person
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Additional VISA</th>
                                <td width="50%" class="text-right">
                                    $190,00
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Trip Price</th>
                                <td width="50%" class="text-right">
                                    $80,00 / person
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Sub Total</th>
                                <td width="50%" class="text-right">
                                    $280,00 / person
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Total (+Unique Code)</th>
                                <td width="50%" class="text-right">
                                    <span class="blue">$280,</span><span class="orange">21</span>
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
                        <a href="{{route('checkout-success')}}" class="btn btn-block btn-join-now mt-3 py-2">
                            I Have Made Payment
                        </a>
                        <a href="{{route('detail')}}" class="btn btn-block btn-cancel mt-3 py-2">
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
        uiLibrary: 'bootstrap4',
        icons: {
            rightIcon: '<img src="/frontend/images/Calender.jpg" height="20px" />'
        }
    });
});
</script>
















<script src="https://kit.fontawesome.com/3e89cfe6ad.js" crossorigin="anonymous"></script>
@endpush