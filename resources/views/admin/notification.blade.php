﻿@extends('../layouts/admin/adminlayout')

@section('content')



<div id="main-wrapper">
  <!-- Sidebar Start -->
  <x-admin.aside />
  <!--  Sidebar End -->

  <div class="page-wrapper">
    <!--  Header Start -->
    <x-admin.header />

    <!--  Header End -->


    <div class="body-wrapper">
      <div class="container-fluid">
        <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
          <div class="card-body px-4 py-3">
            <div class="row align-items-center">
              <div class="col-9">
                <h4 class="fw-semibold mb-8">Notifications</h4>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a class="text-muted text-decoration-none" href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">Notification</li>
                  </ol>
                </nav>
              </div>

            </div>
          </div>
        </div>

        <div class="widget-content searchable-container list">
          <div class="card card-body">
            <div class="table-responsive">
              <table class="table search-table align-middle text-nowrap">
                <thead class="header-item">
                  <th class="">
                    <div class="n-chk align-self-center text-center">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input primary" id="contact-check-all">
                        <label class="form-check-label" for="contact-check-all"></label>
                        <span class="new-control-indicator"></span>
                      </div>
                    </div>
                  </th>
                  <th class="">Notification</th>
                  <th class=" text-end">Time</th>
                </thead>
                <tbody>

                  @foreach($mynotifications as $notification)
                  <tr>
                    <td>
                      <div class="n-chk align-self-center text-center">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input primary" id="contact-check-1">
                        </div>
                      </div>
                    </td>
                    <td>
                      <h6 class=" mb-1 fw-bolder">{{ $notification->title }}</h6>
                      <p class="mb-0">{{ $notification->content }}</p>
                    </td>
                    <td class="text-end">{{ $notification->created_at->diffforHumans() }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <!-- Modal -->
        </div>
      </div>
    </div>

    <x-admin.canvas />

  </div>
  <x-admin.search />
</div>

@endsection