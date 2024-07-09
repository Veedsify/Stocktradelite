@extends('../layouts/user/userlayout')

@section('content')



    <div id="main-wrapper">
      <!-- Sidebar Start -->
      <x-user.aside />
      <!--  Sidebar End -->

      <div class="page-wrapper">
        <!--  Header Start -->
        <x-user.header />

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
                  <a class="text-muted text-decoration-none" href="index.html">Home</a>
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
                  <div class="row">
                    <div class="col-md-4 col-xl-3">
                      <form class="position-relative">
                        <input type="text" class="form-control product-search ps-5" id="input-search" placeholder="Search...">
                        <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                      </form>
                    </div>
                    <div class="col-md-8 col-xl-9 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                      <div class="action-btn show-btn">
                        <a href="javascript:void(0)" class="delete-multiple bg-danger-subtle btn me-2 text-danger d-flex align-items-center ">
                          <i class="ti ti-trash text-danger me-1 fs-5"></i> Delete All Row
                        </a>
                      </div>

                    </div>
                  </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="addContactModal" tabindex="-1" role="dialog" aria-labelledby="addContactModalTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header d-flex align-items-center">
                        <h5 class="modal-title">Contact</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <div class="add-contact-box">
                          <div class="add-contact-content">
                            <form id="addContactModalTitle">
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="mb-3 contact-name">
                                    <input type="text" id="c-name" class="form-control" placeholder="Name">
                                    <span class="validation-text text-danger"></span>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="mb-3 contact-email">
                                    <input type="text" id="c-email" class="form-control" placeholder="Email">
                                    <span class="validation-text text-danger"></span>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="mb-3 contact-occupation">
                                    <input type="text" id="c-occupation" class="form-control" placeholder="Occupation">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="mb-3 contact-phone">
                                    <input type="text" id="c-phone" class="form-control" placeholder="Phone">
                                    <span class="validation-text text-danger"></span>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="mb-3 contact-location">
                                    <input type="text" id="c-location" class="form-control" placeholder="Location">
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <div class="d-flex gap-6 m-0">
                          <button id="btn-add" class="btn btn-success rounded-pill">Add</button>
                          <button id="btn-edit" class="btn btn-success rounded-pill">Save</button>
                          <button class="btn bg-danger-subtle text-danger rounded-pill" data-bs-dismiss="modal"> Discard
                          </button>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="card card-body">
                  <div class="table-responsive">
                    <table class="table search-table align-middle text-nowrap">
                      <thead class="header-item">
                        <th class="px-0">
                          <div class="n-chk align-self-center text-center">
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input primary" id="contact-check-all">
                              <label class="form-check-label" for="contact-check-all"></label>
                              <span class="new-control-indicator"></span>
                            </div>
                          </div>
                        </th>
                        <th class="px-0">notification</th>
                        <th class="px-0 text-end">time</th>

                      </thead>
                      <tbody>
                        <!-- start row -->
                        <tr class="search-items ">
                          <td class=" p-0 ">
                            <div class="n-chk  w-auto m-0 p-0 align-self-center text-center">
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox1">
                                <label class="form-check-label" for="checkbox1"></label>
                              </div>
                            </div>
                          </td>
                          <td class="text-start  px-0">

                                <div class="user-meta-info">
                                  <h6 class="user-name mb-0" data-name="Emma Adams">Emma Adams</h6>
                                  <span class="user-work fs-3" data-occupation="Web Developer">Web Developer</span>
                                </div>
                          </td>
                          <td class="p-0  text-end text-muted ">
                            <small>

                                1min ago
                            </small>
                          </td>

                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr class="search-items ">
                          <td class=" p-0 ">
                            <div class="n-chk  w-auto m-0 p-0 align-self-center text-center">
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox1">
                                <label class="form-check-label" for="checkbox1"></label>
                              </div>
                            </div>
                          </td>
                          <td class="text-start  px-0">

                                <div class="user-meta-info">
                                  <h6 class="user-name mb-0" data-name="Emma Adams">Emma Adams</h6>
                                  <span class="user-work fs-3" data-occupation="Web Developer">Web Developer</span>
                                </div>
                          </td>
                          <td class="p-0  text-end text-muted ">
                            <small>

                                1min ago
                            </small>
                          </td>

                        </tr>
                        <!-- end row -->

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

        <x-user.canvas />

    </div>
    <x-user.search />




    </div>


    <script>
          function copyText(inputId) {
      var input = document.getElementById(inputId);

      if (input && input.value) {
        // Create a temporary input element
        var tempInput = document.createElement('input');
        tempInput.setAttribute('type', 'text');
        tempInput.setAttribute('value', input.value);
        document.body.appendChild(tempInput);

        // Select the text in the temporary input
        tempInput.select();
        tempInput.setSelectionRange(0, 99999); // For mobile devices

        // Copy the selected text
        document.execCommand('copy');

        // Clean up - remove the temporary input element
        document.body.removeChild(tempInput);

        // Visual feedback - change button text to 'Copied!' temporarily
        var copyButton = input.nextElementSibling.querySelector('.btn-primary');
        copyButton.innerText = 'Copied!';
        setTimeout(function() {
          copyButton.innerText = 'Copy';
        }, 1500); // Reset button text after 1.5 seconds
      }
    }
      </script>

    @endsection
