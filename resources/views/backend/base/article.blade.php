   @extends('backend.layout.main')

   @section('backend')
   <!-- Hoverable Table rows -->
              <div class="card">
                <div class="card-header">
                     <div class="col-lg-4 col-md-6">
                      <small class="text-light fw-semibold"></small>
                      <div class="mt-3">
                        <!-- Button trigger modal -->
                        <button
                          type="button"
                          class="btn btn-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#basicModal"
                        >
                          Tambah
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Tambah Artikel</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Artikel</label>
                                    <input type="text" id="nameBasic" class="form-control" placeholder="nama artikel" />
                                  </div>
                                </div>
                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="formFile" class="form-label">input gambar</label>
                                    <input class="form-control" type="file" id="formFile" />  
                                  </div>
                                  <div class="col mb-0">
                                    <label for="dobBasic" class="form-label">link</label>
                                    <input type="text" id="dobBasic" class="form-control" placeholder="tambah link" />
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Judul</label>
                                    <input type="text" id="nameBasic" class="form-control" placeholder="Masukan judul" />
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Deskripsi</label>
                                    <input type="text" id="nameBasic" class="form-control" placeholder="masukan deskripsi" />
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Artikel</th>
                        <th>Foto</th>
                        <th>Judul</th>
                        <th>link</th>
                        <th>deskripsi</th>
                        <th>action</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td>Test</td>
                        <td>Albert Cook</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, magnam.</td>
                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                        <td>Link</td>
                        <td>action</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Hoverable Table rows -->
@endsection