<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            @if(auth()->user()->type === "medical")
            <li><a class="has-arrow ai-icon" href="{{ route('users.index') }}" aria-expanded="false">
                    <i class="flaticon-381-users"></i>
                    <span class="nav-text">Users</span>
                </a>
            </li>
            @endif
        </ul>
    </div>
</div>
