<div id="sidebar" class="collapse collapse-horizontal show">
    <div id="sidebar-nav" class="list-group">
        <a href="{{route('user.index')}}" class="text-white text-decoration-none px-3 pt-4 pb-4" data-bs-parent="#sidebar">
            <i class="bi {{ (request()->is('user')) ? 'bi-person-fill' : 'bi-person' }}"></i> <span>User Management</span>
        </a>
        <hr class="text-white mx-3 my-0">
        <a href="#" class="text-white text-decoration-none px-3 py-4" data-bs-parent="#sidebar">
            <i class="bi {{ (request()->is('supplier')) ? 'bi-person-vcard-fill' : 'bi-person-vcard' }}"></i> <span>Asset Management</span>
        </a>
        <hr class="text-white mx-3 my-0">
    </div>
</div>