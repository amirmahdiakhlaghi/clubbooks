<div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            @if($indexCall == true)
            <livewire:admin.index.home />
            @elseif($categoriesCall == true)
            <livewire:admin.category.category />
            @endif
       </div>
</div>


