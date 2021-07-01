<div class="left-side-bar">
    <div class="brand-logo">
        <a href="#">
            <img src="{{ asset('backend/assets/vendors/images/deskapp-logo.svg') }}" alt="" class="dark-logo">
            <img src="{{ asset('backend/assets/vendors/images/logowhite.png') }}" alt="" class="light-logo">
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            @if (auth()->user()->user_group == \App\Models\User::USER_GROUP['student'])
                <ul id="accordion-menu">
                    <li>
                        <a href="{{ route('portal.index') }}" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
                        </a>
                    </li>


                    <li>
                        <a href="{{ asset('pdf/file1.pdf') }}" target="_blank" class="dropdown-toggle no-arrow">
                            <span class="micon icon-copy fi-page-doc"></span><span class="mtext">Getting Started</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('portal.payment.create') }}" class="dropdown-toggle no-arrow">
                            <span class="micon icon-copy fa fa-credit-card"></span><span class="mtext">Make
                                Payment</span>
                        </a>
                    </li>

                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <div class="sidebar-small-cap">Extra</div>
                    </li>

                    <li>
                        <a href="{{ route('portal.payment-receipt') }}" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-invoice"></span><span class="mtext">Payment Receipts</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('portal.replay') }}" class="dropdown-toggle no-arrow">
                            <span class="micon icon-copy fi-play-video"></span><span class="mtext">Training
                                Replay</span>
                        </a>
                    </li>


                    <li>
                        <a href="{{ route('portal.replay') }}" target="_blank" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-certificate"></span>
                            <span class="mtext">Certification </span>
                        </a>
                    </li>
                </ul>
            @else

            @endif

        </div>
    </div>
</div>
