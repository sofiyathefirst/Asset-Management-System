<div id="sidebar" class="collapse collapse-horizontal show">
    <div id="sidebar-nav" class="list-group">
        <a href="{{route('user.index')}}" class="text-white text-decoration-none px-3 pt-4 pb-4" data-bs-parent="#sidebar">
            <i class="bi {{ (request()->is('user')) ? 'bi-person-fill' : 'bi-person' }}"></i> <span>User</span>
        </a>
        <hr class="text-white mx-3 my-0">
        <a href="{{route('asset.index')}}" class="text-white text-decoration-none px-3 py-4" data-bs-parent="#sidebar">
            <i class="bi {{ (request()->is('supplier')) ? 'bi-person-vcard-fill' : 'bi-person-vcard' }}"></i> <span>Asset</span>
        </a>
        <hr class="text-white mx-3 my-0">
        <a href="{{route('loan.index')}}" class="text-white text-decoration-none px-3 py-4" data-bs-parent="#sidebar">
            <i class="bi {{ (request()->is('supplier')) ? 'bi-person-vcard-fill' : 'bi-person-vcard' }}"></i> <span>Loan</span>
        </a>
        <hr class="text-white mx-3 my-0">
    </div>
</div>