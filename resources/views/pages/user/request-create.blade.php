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

<div class="form-group">
  <label for="request_created_date" class="form-control-label">Tanggal Request</label>
  <input type="text" class="form-control" name="request_created_date" 
    id="request_created_date" placeholder="" value="{{ \Carbon\Carbon::now('Asia/Phnom_Penh') }}" readonly>
</div>

<div class="form-group">
  <label for="client_name" class="form-control-label">Nama Pemohon</label>
  <input type="text" class="form-control" name="client_name" 
    id="client_name" placeholder="Nama Pemohon" value="{{ old('client_name') }}">
</div>

<div class="form-group">
  <label for="department_id" class="form-control-label">Departemen</label>
  <select 
    name="department_id" 
    id="department_id" 
    class="custom-select form-control"
  >
    <option value="" selected>Pilih Departemen</option>
    @foreach ($departments as $department)
      <option value="{{ $department->id }}" {{ old("department_id") === $department->id ? "selected":"" }}>{{ $department->name }}</option>  
    @endforeach
  </select>
</div>

<div class="form-group">
  <label for="computer_id" class="form-control-label">Komputer</label>
  <select 
    name="computer_id" 
    id="computer_id" 
    class="custom-select form-control"
  >
    <option value="" selected>Pilih Komputer</option>
    @foreach ($computers as $computer)
      <option value="{{ $computer->id }}" {{ old("computer_id") === $computer->id ? "selected":"" }}>{{ $computer->ip. ' (' .$computer->comp_name.')' }}</option>  
    @endforeach
  </select>
</div>

<div class="form-group">
  <label for="break_id" class="form-control-label">Jenis Kerusakan</label>
  <select 
    name="break_id" 
    id="break_id" 
    class="custom-select form-control"
  >
    <option value="" selected>Pilih Jenis Kerusakan</option>
    @foreach ($break_types as $break_type)
      <option value="{{ $break_type->id }}" {{ old("break_id") === $break_type->id ? "selected":"" }}>{{ $break_type->name }}</option>
    @endforeach
  </select>
</div>

<div class="form-group">
  <label for="kind_of_repair" class="form-control-label">Jenis Perbaikan</label>
  <select 
    name="kind_of_repair" 
    id="kind_of_repair" 
    class="custom-select form-control"
  >
    <option value="" selected>Pilih Jenis Perbaikan</option>
    <option value="PERBAIKAN">PERBAIKAN</option>
    <option value="FASILITAS">FASILITAS</option>
  </select>
</div>

<div class="form-group">
  <label for="description" class="form-control-label">Deskripsi</label>
  <textarea 
    class="form-control" 
    name="description" 
    id="description" 
    placeholder="Deskripsi"
    rows="2"
  >{{ old('description') }}</textarea>
</div>