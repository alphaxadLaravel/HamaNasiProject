<form action="" wire:submit.prevent="checkout" method="post">
    @csrf
    @if (Session::has('branch'))
        <div class="alert alert-warning alert-dismissible" role="alert">
            <small>Please check the branch you selected!</small>
        </div>
    @endif
    @if (Session::has('amount'))
        <div class="alert alert-warning alert-dismissible" role="alert">
            <small>You have Low amount in your account!</small>
        </div>
    @endif
    @if (Session::has('account'))
        <div class="alert alert-warning alert-dismissible" role="alert">
            <small>Wrong Phone Number or Pin!</small>
        </div>
    @endif
    <div class="row">
        @if ($step1)
            <div class="col-md-12">
                <div class="app-card app-card-account shadow-sm d-flex flex-column align-items-start">
                    <div class="app-card-header p-3 border-bottom-0">
                        <div class="row align-items-center gx-3">
                            <div class="col-auto">
                                <div class="app-icon-holder">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-credit-card"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z">
                                        </path>
                                        <path
                                            d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <div class="col-auto">
                                <h4 class="app-card-title">Choose payment Method</h4>
                            </div>
                        </div>
                    </div>
                    <div class="app-card-body px-4 w-100">
                        <div class="col-md-12">
                            <div class="item border-bottom py-3">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <div class="item-label"><img src="{{ asset('images/mpesa.png') }}"
                                                class="rounded" width="30px" height="30px" alt=""><strong>
                                                M-Pesa </strong></div>
                                    </div>
                                    <div class="col text-end">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" style="cursor: pointer;"
                                                    wire:model="branch" id="" value="M-Pesa">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="item border-bottom py-3">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <div class="item-label"><img src="{{ asset('images/tigopesa.png') }}"
                                                width="30px" height="30px" alt=""><strong> Tigo Pesa
                                            </strong></div>
                                    </div>
                                    <div class="col text-end">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" style="cursor: pointer;"
                                                    wire:model="branch" id="" value="Tigo Pesa">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-12">
                            <div class="item border-bottom py-3">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <div class="item-label"><img src="{{ asset('images/airtelpesa.png') }}"
                                                class="rounded" width="30px" height="30px" alt=""><strong>
                                                Airtel
                                                Money </strong></div>
                                    </div>
                                    <div class="col text-end">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" style="cursor: pointer;"
                                                    wire:model="branch" id="" value="Airtel Money">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-12">
                            <div class="item border-bottom py-3">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <div class="item-label"><img src="{{ asset('images/master.png') }}"
                                                class="rounded" width="30px" height="30px" alt=""><strong>
                                                Credit Card </strong></div>
                                    </div>
                                    <div class="col text-end">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" style="cursor: pointer;"
                                                    wire:model="branch" id="" value="Bank">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="py-4 d-flex justify-content-end">
                            <button type="button" wire:click="goStep2" class="btn app-btn-secondary">Proceed to
                                Pay</button>
                        </div>
                    </div>
                </div>
            </div>
        @elseif($step2)
            @if ($credit)
                <div class="col-md-12">
                    <div class="app-card app-card-account shadow-sm d-flex flex-column align-items-start">
                        <div class="app-card-header p-3 border-bottom-0">
                            <div class="row align-items-center gx-3">
                                <div class="col-auto">
                                    <div class="app-icon-holder">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16"
                                            class="bi bi-shield-check" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M5.443 1.991a60.17 60.17 0 0 0-2.725.802.454.454 0 0 0-.315.366C1.87 7.056 3.1 9.9 4.567 11.773c.736.94 1.533 1.636 2.197 2.093.333.228.626.394.857.5.116.053.21.089.282.11A.73.73 0 0 0 8 14.5c.007-.001.038-.005.097-.023.072-.022.166-.058.282-.111.23-.106.525-.272.857-.5a10.197 10.197 0 0 0 2.197-2.093C12.9 9.9 14.13 7.056 13.597 3.159a.454.454 0 0 0-.315-.366c-.626-.2-1.682-.526-2.725-.802C9.491 1.71 8.51 1.5 8 1.5c-.51 0-1.49.21-2.557.491zm-.256-.966C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 0 1 2.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 0 1-2.418 2.3 6.942 6.942 0 0 1-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 0 1-1.007-.586 11.192 11.192 0 0 1-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 0 1 2.415 1.84a61.11 61.11 0 0 1 2.772-.815z">
                                            </path>
                                            <path fill-rule="evenodd"
                                                d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <h4 class="app-card-title">Pay By Credit Card</h4>
                                </div>
                            </div>
                        </div>
                        <div class="app-card-body px-4 w-100">

                            <div class="app-card-body px-4 w-100">
                                <div class="form-group">
                                    <label for="">Enter Card Number</label>
                                    <input type="text" class="form-control" name="" id=""
                                        aria-describedby="helpId" placeholder="">
                                </div>
                                <div class="row">
                                    <div class="col-">
                                        <div class="form-group">
                                            <label for="">CVV</label>
                                            <input type="text" class="form-control" name="" id=""
                                                aria-describedby="helpId" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-">
                                        <div class="form-group">
                                            <label for="">YY</label>
                                            <input type="text" class="form-control" name="" id=""
                                                aria-describedby="helpId" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4 px-4 mb-4">
                                    <button type="submit" class="btn btn-primary w-100 text-white">Pay
                                        Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if ($money)
                <div class="col-md-12">
                    <div class="app-card app-card-account shadow-sm d-flex flex-column align-items-start">
                        <div class="app-card-header p-3 border-bottom-0">
                            <div class="row align-items-center gx-3">
                                <div class="col-auto">
                                    <div class="app-icon-holder">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16"
                                            class="bi bi-shield-check" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M5.443 1.991a60.17 60.17 0 0 0-2.725.802.454.454 0 0 0-.315.366C1.87 7.056 3.1 9.9 4.567 11.773c.736.94 1.533 1.636 2.197 2.093.333.228.626.394.857.5.116.053.21.089.282.11A.73.73 0 0 0 8 14.5c.007-.001.038-.005.097-.023.072-.022.166-.058.282-.111.23-.106.525-.272.857-.5a10.197 10.197 0 0 0 2.197-2.093C12.9 9.9 14.13 7.056 13.597 3.159a.454.454 0 0 0-.315-.366c-.626-.2-1.682-.526-2.725-.802C9.491 1.71 8.51 1.5 8 1.5c-.51 0-1.49.21-2.557.491zm-.256-.966C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 0 1 2.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 0 1-2.418 2.3 6.942 6.942 0 0 1-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 0 1-1.007-.586 11.192 11.192 0 0 1-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 0 1 2.415 1.84a61.11 61.11 0 0 1 2.772-.815z">
                                            </path>
                                            <path fill-rule="evenodd"
                                                d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <h4 class="app-card-title">Pay By Mobile Number</h4>
                                </div>
                            </div>
                        </div>
                        <div class="app-card-body px-4 w-100">

                            <div class="app-card-body px-4 w-100">
                                <div class="form-group">
                                    <label for="">Enter Mobile Number</label>
                                    <input type="text" class="form-control" wire:model="phone" id=""
                                        aria-describedby="helpId" placeholder="">
                                    <small class="text-danger">
                                        @error('phone')
                                            {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                                <div class="form-group">
                                    <label for="">Enter PIN</label>
                                    <input type="text" class="form-control" wire:model="pin" id=""
                                        aria-describedby="helpId" placeholder="">
                                    <small class="text-danger">
                                        @error('pin')
                                            {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                                <div class="row mt-4 px-4">
                                    <button type="submit" wire:click="checkout"
                                        class="btn btn-primary w-100 text-white">Pay Now</button>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            @endif

        @endif
    </div>
</form>
