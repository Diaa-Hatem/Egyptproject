@extends('themes.master')

@section('main-title', 'Check out page')

@section('hero-title', 'CheckOut')

@section('contant')
    <div class="untree_co-section">
        <div class="container">
            <form action="{{ route('thankyoupage') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-md-6 mb-5 mb-md-0">
                        <h2 class="h3 mb-3 text-black">Billing Details</h2>
                        <div class="p-3 p-lg-5 border bg-white">

                            <div class="form-group">
                                <label for="country" class="text-black">Country <span class="text-danger">*</span></label>
                                <select id="country" class="form-control" name="country">
                                    <option value="">Select a country</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                </select>
                                <x-input-error :messages="$errors->get('country')" class="mt-2" />

                            </div>


                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="first_name" class="text-black">First Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="first_name" name="first_name"
                                        value="{{ old('first_name') }}">
                                    <x-input-error :messages="$errors->get('first_name')" class="mt-2" />

                                </div>
                                <div class="col-md-6">
                                    <label for="last_name" class="text-black">Last Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="last_name" name="last_name"
                                        value="{{ old('last_name') }}">
                                    <x-input-error :messages="$errors->get('last_name')" class="mt-2" />

                                </div>
                            </div>



                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="governorate" class="text-black">Governorate <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="governorate" name="governorate"
                                        value="{{ old('governorate') }}">
                                    <x-input-error :messages="$errors->get('governorate')" class="mt-2" />

                                </div>
                                <div class="col-md-12">
                                    <label for="city" class="text-black">City <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="city" name="city"
                                        value="{{ old('city') }}">
                                    <x-input-error :messages="$errors->get('city')" class="mt-2" />

                                </div>
                            </div>




                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="address" class="text-black">Address <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="address" name="address"
                                        value="{{ old('address') }}">
                                    <x-input-error :messages="$errors->get('address')" class="mt-2" />

                                </div>

                                <div class="col-md-12">
                                    <label for="apartment" class="text-black">Apartment <span
                                            class="text-danger">*</span></label>
                                    <input type="text" id="apartment" name="apartment" class="form-control"
                                        placeholder="Apartment, suite, unit etc." value="{{ old('apartment') }}">
                                    <x-input-error :messages="$errors->get('apartment')" class="mt-2" />

                                </div>
                            </div>

                            <div class="form-group row mb-5">
                                <div class="col-md-6">
                                    <label for="email" class="text-black">Email Address <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="email" name="email"
                                        value="{{ old('email') }}">
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="text-black">Phone <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="phone" name="phone"
                                        value="{{ old('phone') }}">
                                    <x-input-error :messages="$errors->get('phone')" class="mt-2" />

                                </div>
                            </div>


                            <div class="form-group">
                                <label for="notes" class="text-black">Order Notes</label>
                                <textarea name="notes" id="notes" cols="30" rows="5" class="form-control"
                                    placeholder="Write your notes here...">{{ old('notes') }}</textarea>
                            </div>




                        </div>
                    </div>



                    <div class="col-md-6">
                        <div class="row mb-5">
                            <div class="col-md-12">
                                <div class="p-2 p-lg-3 border bg-white">
                                    <h2 class="h3 mb-3 text-black">Checkout</h2>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-5">
                            <div class="col-md-12">
                                <h2 class="h3 mb-3 text-black">Your Order</h2>
                                <div class="p-3 p-lg-5 border bg-white">
                                    <table class="table site-block-order-table mb-5">
                                        <thead>
                                            <th>Product</th>
                                            <th>Total</th>
                                        </thead>
                                        <tbody>
                                            @if (isset($cart)&&count($cart) > 0)
                                                @foreach ($cart as $item)
                                                    <tr>
                                                        <td>{{ $item['title'] }}<strong class="mx-2">x</strong>
                                                            {{ $item['quantity'] }}</td>
                                                        <td>{{ $item['price'] * $item['quantity'] }}</td>
                                                    </tr>
                                                    @php
                                                        $total += $item['quantity'] * $item['price'];

                                                    @endphp
                                                @endforeach
                                                <tr>
                                                    <td class="text-black font-weight-bold"><strong>Order Total</strong>
                                                    </td>
                                                    <td class="text-black font-weight-bold">
                                                        <strong>{{ $total }}</strong>
                                                    </td>
                                                </tr>
                                        </tbody>
                                        @endif

                                    </table>


                                    <div class="border p-3 mb-3">
                                        <h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse"
                                                href="#collapsebank" role="button" aria-expanded="false"
                                                aria-controls="collapsebank">Direct Bank
                                                Transfer</a></h3>

                                        <div class="collapse" id="collapsebank">
                                            <div class="py-2">
                                                <p class="mb-0">Make your payment directly into our bank account. Please
                                                    use
                                                    your Order ID as the payment reference. Your order won’t be shipped
                                                    until
                                                    the funds have cleared in our account.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="border p-3 mb-3">
                                        <h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse"
                                                href="#collapsecheque" role="button" aria-expanded="false"
                                                aria-controls="collapsecheque">Cheque Payment</a>
                                        </h3>

                                        <div class="collapse" id="collapsecheque">
                                            <div class="py-2">
                                                <p class="mb-0">Make your payment directly into our bank account. Please
                                                    use
                                                    your Order ID as the payment reference. Your order won’t be shipped
                                                    until
                                                    the funds have cleared in our account.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="border p-3 mb-5">
                                        <h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse"
                                                href="#collapsepaypal" role="button" aria-expanded="false"
                                                aria-controls="collapsepaypal">Paypal</a></h3>

                                        <div class="collapse" id="collapsepaypal">
                                            <div class="py-2">
                                                <p class="mb-0">Make your payment directly into our bank account. Please
                                                    use
                                                    your Order ID as the payment reference. Your order won’t be shipped
                                                    until
                                                    the funds have cleared in our account.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button class="btn btn-black btn-lg py-3 btn-block"
                                            onclick="window.location">Place Order</button>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('footer-image')

    <div class="sofa-img">
        <img src="{{ asset('assets') }}/images/sofa.png" alt="Image" class="img-fluid">
    </div>

@endsection
