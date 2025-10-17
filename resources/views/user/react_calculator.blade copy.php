@extends('front_end_layout.front_end')
@section('content')
    <!--start page wrapper -->
    <section class="authentication py-5">
        <div class="container">
            <div class="col-lg-4 col-md-6 mx-auto">
                <div class="auth-clm p-4 shadow rounded-4 bg-white">
                    <div class="d-flex gap-3 align-items-center mb-4">
                        <img src="{{ asset('user/assets/images/reacto-img.svg') }}" alt="">
                        <h2 class="heading26px fw_700 m-0">Reacto</h2>
                    </div>

                    <form id="currencyForm">
                        @csrf
                        <!-- FROM -->
                        <div class="From_one mb-3">
                            <span class="fw_600 text-uppercase small">From</span>
                            <div class="d-flex justify-content-between align-items-center gap-3 from_amount">
                                <div class="from_input flex-grow-1">
                                    <input type="number" id="fromAmount" name="from_amount" placeholder="0.0" required
                                        class="form-control amount_input  bg-dark" min="0">
                                </div>
                                <div class="select_option_wrap">
                                    <img src="{{ asset('user/assets/images/usdt.svg') }}" alt="" class="img-fluid"
                                        width="30">
                                    <select id="fromCurrency" class="form-select curency_selector">
                                        <option value="USDT">USDT</option>
                                        <option value="BTC">BTC</option>
                                        <option value="ETH">ETH</option>
                                        <option value="PKR">PKR</option>
                                        <option value="USD">USD</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center small mt-1">
                                <span id="fromValue">= $0.00</span>
                                <span>BALANCE: 1000</span>
                            </div>
                        </div>

                        <!-- TO -->
                        <div class="From_one mb-3">
                            <span class="fw_600 text-uppercase small">To</span>
                            <div class="d-flex justify-content-between align-items-center gap-3 from_amount">
                                <div class="from_input flex-grow-1">
                                    <input type="number" id="toAmount" name="to_amount" placeholder="0.0" readonly
                                        class="form-control amount_input bg-dark" style="color: black">
                                </div>
                                <div class="select_option_wrap">
                                    <img src="{{ asset('user/assets/images/usdt.svg') }}" alt="" class="img-fluid"
                                        width="30">
                                    <select id="toCurrency" class="form-select curency_selector">
                                        <option value="USD">USD</option>
                                        <option value="PKR">PKR</option>
                                        <option value="BTC">BTC</option>
                                        <option value="ETH">ETH</option>
                                        <option value="USDT">USDT</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center small mt-1">
                                <span id="toValue">= $0.00</span>
                                <span>BALANCE: 500</span>
                            </div>
                        </div>

                        <a href="#" class="connect_btn btn btn-primary w-100 mt-3">Connect</a>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Simple test script -->
    <script>
        // Dummy exchange rates (example only)
        const rates = {
            USDT: {
                USD: 1,
                PKR: 280,
                BTC: 0.000016,
                ETH: 0.00025
            },
            USD: {
                USDT: 1,
                PKR: 280,
                BTC: 0.000016,
                ETH: 0.00025
            },
            PKR: {
                USD: 0.00357,
                USDT: 0.00357,
                BTC: 0.000000057,
                ETH: 0.0000009
            },
            BTC: {
                USD: 63000,
                USDT: 63000,
                PKR: 17640000,
                ETH: 15.9
            },
            ETH: {
                USD: 3950,
                USDT: 3950,
                PKR: 1100000,
                BTC: 0.063
            }
        };

        function calculateConversion() {
            const fromAmount = parseFloat(document.getElementById('fromAmount').value) || 0;
            const fromCurrency = document.getElementById('fromCurrency').value;
            const toCurrency = document.getElementById('toCurrency').value;

            let result = 0;

            if (fromCurrency === toCurrency) {
                result = fromAmount;
            } else if (rates[fromCurrency] && rates[fromCurrency][toCurrency]) {
                result = fromAmount * rates[fromCurrency][toCurrency];
            }

            document.getElementById('toAmount').value = result.toFixed(4);
            document.getElementById('fromValue').innerText = `= ${fromAmount} ${fromCurrency}`;
            document.getElementById('toValue').innerText = `= ${result.toFixed(2)} ${toCurrency}`;
        }

        document.getElementById('fromAmount').addEventListener('input', calculateConversion);
        document.getElementById('fromCurrency').addEventListener('change', calculateConversion);
        document.getElementById('toCurrency').addEventListener('change', calculateConversion);
    </script>

    <!--end page wrapper -->
@endsection
