<!-- 
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
 @extends('layouts.app')

 @section('title', 'IKET - Computer List')

 @section('content')
 <div class="content">
  <div class="container-fluid">
      <div class="row">
          <div class="col-12">
              <div class="card ">
                  <div class="card-header ">
                      <h4 class="card-title">List Komputer</h4>
                      <p class="card-category">yang terdaftar di sistem</p>
                  </div>
                  <div class="card-body ">

                    <a 
                      href="{{ route('computer.create') }}" 
                      class="btn btn-primary btn-sm mb-2">
                        <i class="fas fa-plus"></i>&nbsp;&nbsp;Buat Data Komputer
                    </a>

                    <div class="table-responsive overflow-auto">
                      <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>IP Komputer</th>
                            <th>Nama Komputer</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @forelse ($items as $item)
                          <tr>
                              <td>{{ $item->ip }}</td>
                              <td>{{ $item->comp_name }}</td>
                              <td>
                                <a 
                                  href="{{ route('computer.edit', $item->id) }}" 
                                  class="btn btn-primary btn-sm mb-2" id="">
                                  <i class="fas fa-edit"></i>&nbsp;&nbsp;Edit
                                </a>
                              </td>
                          </tr>
                          @empty
                          <tr>
                            <td colspan="3">Tidak ada data yang dapat ditampilkan</td>
                          </tr>
                          @endforelse
                        </tbody>
                      </table>
                    </div>

                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

 @endsection 