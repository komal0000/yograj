@extends('admin.adminpanel')
@section('title', 'Settings')
@section('jumbo')
<li class="breadcrumb-item active" aria-current="page">Settings</li>
@endsection
@section('content')

<div class="">

    <div class="row mt-2">
        <div class="col-md-4 mb-3">
            <div class="card setting-item">
                <div class="card-body">
                    <h4><i class="fas fa-home"></i> Home Settings</h4>
                    <p>Edit settings related to the home page here.</p>
                    <a href="{{ route('admin.settings.homepage') }}" class="card-link"><i class="fas fa-link"></i> Go to Home Settings</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card setting-item">
                <div class="card-body">
                    <h4><i class="fas fa-info-circle"></i> About Settings</h4>
                    <p>Edit settings related to the about page here.</p>
                    <a href="{{ route('admin.settings.aboutpage') }}" class="card-link"><i class="fas fa-link"></i> Go to About Settings</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card setting-item">
                <div class="card-body">
                    <h4><i class="fas fa-gear"></i> Footer Settings</h4>
                    <p>Edit settings related to the Footer page here.</p>
                    <a href="{{ route('admin.settings.footer') }}" class="card-link"><i class="fas fa-link"></i> Go to Footer Settings</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card setting-item">
                <div class="card-body">
                    <h4><i class="fas fa-gear"></i> General Settings</h4>
                    <p>Edit settings related to the general content</p>
                    <a href="{{ route('admin.settings.general') }}" class="card-link"><i class="fas fa-link"></i> Go to General Settings</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card setting-item">
                <div class="card-body">
                    <h4><i class="fas fa-gear"></i> Meta Settings</h4>
                    <p>Edit settings related to the meta content</p>
                    <a href="{{ route('admin.settings.meta') }}" class="card-link"><i class="fas fa-link"></i> Go to Meta Settings</a>
                </div>
            </div>
        </div>
        <!-- Add more settings sections as needed -->
    </div>
</div>

@endsection
