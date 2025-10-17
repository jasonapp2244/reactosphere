@extends('front_end_layout.front_end')
@section('content')
    <!--start page wrapper -->
<section class="authentication">
  <div class="container">
    <div class="col-lg-4 col-md-6 mx-auto">
      <div class="auth-clm position-relative" style="padding-top: 70px; padding-bottom: 70px;">
        <div class="d-flex gap-3 align-items-center mb-3">
          <img src="{{ asset('user/assets/images/reacto-img.svg')}}" alt="">
          <h2 class="heading26px fw_700 m-0">Reacto</h2>
        </div>

        <form action="#" method="POST" id="swapForm" class="position-relative">

          <!-- FROM BOX 1 -->
          <div class="From_one mb-3" id="fromBox1">
            <span>FROM</span>
            <div class="d-flex justify-content-between align-items-center gap-3 from_amount">
              <div class="from_input">
                <input type="number" id="amount1" placeholder="0.0" required class="amount_input" min="0">
              </div>
              <div class="select_option_wrap">
                <img src="{{ asset('user/assets/images/usdt.svg')}}" alt="" class="img-fluid">
                <select id="currency1" class="curency_selector">
                  <option value="USDT">USDT</option>
                </select>
              </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
              <span id="usdValue1">= $0.00</span>
              <span>BALANCE:</span>
            </div>
          </div>

          <!-- SWAP ICON -->
          <div id="swapIconWrap">
            <img src="{{ asset('user/assets/images/swiper-img.png')}}" alt="Swap" id="swapIcon" style="cursor:pointer; transition: transform 0.3s;">
          </div>

          <!-- FROM BOX 2 -->
          <div class="From_one mb-3" id="fromBox2">
            <span>TO</span>
            <div class="d-flex justify-content-between align-items-center gap-3 from_amount">
              <div class="from_input">
                <input type="number" id="amount2" placeholder="0.0" required class="amount_input" min="0">
              </div>
              <!-- <div class="select_option_wrap">
                <img src="{{ asset('user/assets/images/reacto-img.svg')}}" alt="" class="img-fluid">
                <select id="currency2" class="curency_selector">
                  <option value="RECTO">RECTO</option>
                </select>
              </div> -->
               <div class="select_option_wrap">
                 <img src="{{ asset('user/assets/images/reacto-img.svg')}}" alt="" class="img-fluid">
                <select id="currency2" class="curency_selector">
                  <option value="USDT">RECTO</option>
                </select>
              </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
              <span id="usdValue2">= $0.00</span>
              <span>BALANCE:</span>
            </div>
          </div>

          <a href="#" class="connect_btn">Connect</a>
        </form>
      </div>
    </div>
  </div>
</section>

    <!--end page wrapper -->
@endsection
