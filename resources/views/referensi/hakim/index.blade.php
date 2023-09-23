@extends('layouts.dashboard.app')

@section('title', 'Ref Hakim')

@section('breadcrumb')
<x-dashboard.breadcrumb title="Referensi" page="Referensi" active="hakim" route="{{ route('hakim.index') }}" />
@endsection

@section('content')
<div class="card card-height-100 table-responsive">
    <!-- cardheader -->
    <div class="card-header border-bottom-dashed align-items-center d-flex">
        <h4 class="card-title mb-0 flex-grow-1">Hakim</h4>
        <div class="flex-shrink-0">
            <button type="button" class="btn btn-soft-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-form-add-hakim">
                <i class="ri-add-line"></i>
                Add
            </button>
        </div>
    </div>
    
    <!-- end cardheader -->
    <!-- Hoverable Rows -->
    <table class="table table-hover table-nowrap mb-0">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">NIP</th>
                <th scope="col">Status</th>
                <th scope="col" class="col-1"></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($hakims as $hakim)
            <tr>
                <th>{{$hakims->firstItem() + $loop->iteration - 1}}</th>
                <!-- <th scope="row">{{ $loop->iteration }}</th> -->
                <td>{{ $hakim->nama }}</td>
                <td>{{ $hakim->nip }}</td>
                <td>{{ $hakim->status }}</td>
                <td>
                    <div class="dropdown">
                        <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ri-more-2-fill"></i>
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modal-form-edit-hakim-{{ $hakim->id }}">
                                    Edit
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('modal-form-delete-hakim-{{ $hakim->id }}').submit()">
                                    Delete
                                </a>
                            </li>
                        </ul>

                        @include('components.form.modal.hakim.edit')
                        @include('components.form.modal.hakim.delete')
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <th colspan="5" class="text-center">No data to display</th>
            </tr>
            @endforelse
        </tbody>
    </table>
    <div class="card-footer py-4">
        <nav aria-label="..." class="pagination justify-content-end">
            {{ $hakims->links() }}
        </nav>
    </div>
</div>

@include('components.form.modal.hakim.add')
@endsection