@extends('layouts.app')

@section('styles')
@endsection

@section('content')
    <div>
        @if ($user_detail->step < 4)
            <div class="container pt-5">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item {{ $user_detail->step == 1 ? 'text-info' : 'text-secondary' }}">Basic
                            Details
                        </li>
                        <li class="breadcrumb-item {{ $user_detail->step == 2 ? 'text-info' : 'text-secondary' }}">Education
                            Details</li>
                        <li class="breadcrumb-item {{ $user_detail->step == 3 ? 'text-info' : 'text-secondary' }}">
                            Application
                            Review</li>

                    </ol>
                </nav>
            </div>
        @endif

        @if ($user_detail->step == 3)
            @include('multiStep.step3')
        @elseif ($user_detail->step == 2)
            @include('multiStep.step2')
        @elseif ($user_detail->step == 1)
            @include('multiStep.step1')
        @else
            @include('multiStep.status')
        @endif
    </div>
@endsection

@section('scripts')
@endsection
