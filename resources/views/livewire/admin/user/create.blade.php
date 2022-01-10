<div class="card">
    <div class="card-header p-0">
        <h3 class="card-title">{{ __('CreateTitle', ['name' => __('User') ]) }}</h3>
        <div class="px-2 mt-4">
            <ul class="breadcrumb mt-3 py-3 px-4 rounded" style="background-color: #e9ecef!important;">
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.userCrud.read')" class="text-decoration-none">{{ __(\Illuminate\Support\Str::plural('User')) }}</a></li>
                <li class="breadcrumb-item active">{{ __('Create') }}</li>
            </ul>
        </div>
    </div>

    <form class="form-horizontal" wire:submit.prevent="create" enctype="multipart/form-data">

        <div class="card-body">
            <div class="row ">
                <div class="col-md-6">
                    <div class="form-group position-relative">
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group position-relative">
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-md-3">
                        <input type="text" class="form-control" placeholder="">
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-info ml-4">{{ __('Create') }}</button>
            <a href="@route(getRouteName().'.userCrud.read')" class="btn btn-default float-left">{{ __('Cancel') }}</a>
        </div>
    </form>
</div>
