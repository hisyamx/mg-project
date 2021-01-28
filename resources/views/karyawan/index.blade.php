@extends('users.master')
@section('title', 'Karyawan - Dashboard Management')

@section('content')
<!-- Header -->
<div class="header bg-default pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i
                                        class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('karyawan.index') }}">Karyawan</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="{{ route('karyawan.create') }}" class="btn btn-sm btn-neutral">Tambah Data Karyawan</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Data Karyawan</h3>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">Kode</th>
                                <th scope="col" class="sort" data-sort="name">Nama</th>
                                <th scope="col" class="sort" data-sort="budget">Divisi</th>
                                <th scope="col" class="sort" data-sort="status">Status</th>
                                <th scope="col" class="sort" data-sort="completion">Sekolah</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <tr>
                                <td class="budget">
                                    $2500 USD
                                </td>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <a href="#" class="avatar rounded-circle mr-3">
                                            <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                                        </a>
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm"> nama </span>
                                        </div>
                                    </div>
                                </th>
                                <td class="budget">
                                    $2500 USD
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        <i class="bg-warning"></i>
                                        {{-- <i class="bg-info"></i> //blue --}}
                                        {{-- <i class="bg-success"></i> //green  --}}
                                        <span class="status">Off</span>
                                    </span>
                                </td>
                                <td class="budget">
                                    $2500 USD
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <a class="dropdown-item" href="#">Hapus</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- try datatables --}}
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <h3 class="mb-0">Datatable</h3>
                    <p class="text-sm mb-0">
                        This is an exmaple of datatable using the well known datatables.net plugin. This is a minimal
                        setup in order to get started fast.
                    </p>
                </div>
                <div class="table-responsive py-4">
                    <div id="datatable-basic_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_length" id="datatable-basic_length"><label>Show <select
                                            name="datatable-basic_length" aria-controls="datatable-basic"
                                            class="form-control form-control-sm">
                                            <option value="5">10</option>
                                            <option value="10">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select> entries</label></div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div id="datatable-basic_filter" class="dataTables_filter"><label>Search:<input
                                            type="search" class="form-control form-control-sm" placeholder=""
                                            aria-controls="datatable-basic"></label></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-flush dataTable" id="datatable-basic" role="grid"
                                    aria-describedby="datatable-basic_info">
                                    <thead class="thead-light">
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="datatable-basic"
                                                rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="Name: activate to sort column descending"
                                                style="width: 182px;">Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable-basic" rowspan="1"
                                                colspan="1" aria-label="Position: activate to sort column ascending"
                                                style="width: 282px;">Position</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable-basic" rowspan="1"
                                                colspan="1" aria-label="Office: activate to sort column ascending"
                                                style="width: 137px;">Office</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable-basic" rowspan="1"
                                                colspan="1" aria-label="Age: activate to sort column ascending"
                                                style="width: 60px;">Age</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable-basic" rowspan="1"
                                                colspan="1" aria-label="Start date: activate to sort column ascending"
                                                style="width: 128px;">Start date</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable-basic" rowspan="1"
                                                colspan="1" aria-label="Salary: activate to sort column ascending"
                                                style="width: 114px;">Salary</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1">Name</th>
                                            <th rowspan="1" colspan="1">Position</th>
                                            <th rowspan="1" colspan="1">Office</th>
                                            <th rowspan="1" colspan="1">Age</th>
                                            <th rowspan="1" colspan="1">Start date</th>
                                            <th rowspan="1" colspan="1">Salary</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>$162,700</td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">Angelica Ramos</td>
                                            <td>Chief Executive Officer (CEO)</td>
                                            <td>London</td>
                                            <td>47</td>
                                            <td>2009/10/09</td>
                                            <td>$1,200,000</td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td>$86,000</td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">Bradley Greer</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>41</td>
                                            <td>2012/10/13</td>
                                            <td>$132,000</td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">Brenden Wagner</td>
                                            <td>Software Engineer</td>
                                            <td>San Francisco</td>
                                            <td>28</td>
                                            <td>2011/06/07</td>
                                            <td>$206,850</td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2012/12/02</td>
                                            <td>$372,000</td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">Bruno Nash</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>38</td>
                                            <td>2011/05/03</td>
                                            <td>$163,500</td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">Caesar Vance</td>
                                            <td>Pre-Sales Support</td>
                                            <td>New York</td>
                                            <td>21</td>
                                            <td>2011/12/12</td>
                                            <td>$106,450</td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">Cara Stevens</td>
                                            <td>Sales Assistant</td>
                                            <td>New York</td>
                                            <td>46</td>
                                            <td>2011/12/06</td>
                                            <td>$145,600</td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2012/03/29</td>
                                            <td>$433,060</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                                <div class="dataTables_info" id="datatable-basic_info" role="status" aria-live="polite">
                                    Showing 1 to 10 of 57 entries</div>
                            </div>
                            <div class="col-sm-12 col-md-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="datatable-basic_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled"
                                            id="datatable-basic_previous"><a href="#" aria-controls="datatable-basic"
                                                data-dt-idx="0" tabindex="0" class="page-link"><i
                                                    class="fas fa-angle-left"></i></a></li>
                                        <li class="paginate_button page-item active"><a href="#"
                                                aria-controls="datatable-basic" data-dt-idx="1" tabindex="0"
                                                class="page-link">1</a></li>
                                        <li class="paginate_button page-item "><a href="#"
                                                aria-controls="datatable-basic" data-dt-idx="2" tabindex="0"
                                                class="page-link">2</a></li>
                                        <li class="paginate_button page-item "><a href="#"
                                                aria-controls="datatable-basic" data-dt-idx="3" tabindex="0"
                                                class="page-link">3</a></li>
                                        <li class="paginate_button page-item "><a href="#"
                                                aria-controls="datatable-basic" data-dt-idx="4" tabindex="0"
                                                class="page-link">4</a></li>
                                        <li class="paginate_button page-item "><a href="#"
                                                aria-controls="datatable-basic" data-dt-idx="5" tabindex="0"
                                                class="page-link">5</a></li>
                                        <li class="paginate_button page-item "><a href="#"
                                                aria-controls="datatable-basic" data-dt-idx="6" tabindex="0"
                                                class="page-link">6</a></li>
                                        <li class="paginate_button page-item next" id="datatable-basic_next"><a href="#"
                                                aria-controls="datatable-basic" data-dt-idx="7" tabindex="0"
                                                class="page-link"><i class="fas fa-angle-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <h3 class="mb-0">Action buttons</h3>
                    <p class="text-sm mb-0">
                        This is an exmaple of datatable using the well known datatables.net plugin. This is a minimal
                        setup in order to get started fast.
                    </p>
                </div>
                <div class="table-responsive py-4">
                    <div id="datatable-buttons_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="dt-buttons btn-group flex-wrap"> <button
                                class="btn buttons-copy buttons-html5 btn-sm btn-default" tabindex="0"
                                aria-controls="datatable-buttons" type="button"><span>Copy</span></button> <button
                                class="btn buttons-print btn-sm btn-default" tabindex="0"
                                aria-controls="datatable-buttons" type="button"><span>Print</span></button> </div>
                        <div id="datatable-buttons_filter" class="dataTables_filter"><label>Search:<input type="search"
                                    class="form-control form-control-sm" placeholder=""
                                    aria-controls="datatable-buttons"></label></div>
                        <table class="table table-flush dataTable" id="datatable-buttons" role="grid"
                            aria-describedby="datatable-buttons_info">
                            <thead class="thead-light">
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Name: activate to sort column descending" style="width: 182px;">Name
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" aria-label="Position: activate to sort column ascending"
                                        style="width: 282px;">Position</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" aria-label="Office: activate to sort column ascending"
                                        style="width: 137px;">Office</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" aria-label="Age: activate to sort column ascending"
                                        style="width: 60px;">Age</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" aria-label="Start date: activate to sort column ascending"
                                        style="width: 128px;">Start date</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" aria-label="Salary: activate to sort column ascending"
                                        style="width: 114px;">Salary</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">Name</th>
                                    <th rowspan="1" colspan="1">Position</th>
                                    <th rowspan="1" colspan="1">Office</th>
                                    <th rowspan="1" colspan="1">Age</th>
                                    <th rowspan="1" colspan="1">Start date</th>
                                    <th rowspan="1" colspan="1">Salary</th>
                                </tr>
                            </tfoot>
                            <tbody>

























































                                <tr role="row" class="odd">
                                    <td class="sorting_1">Airi Satou</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>33</td>
                                    <td>2008/11/28</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Angelica Ramos</td>
                                    <td>Chief Executive Officer (CEO)</td>
                                    <td>London</td>
                                    <td>47</td>
                                    <td>2009/10/09</td>
                                    <td>$1,200,000</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    <td>2009/01/12</td>
                                    <td>$86,000</td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Bradley Greer</td>
                                    <td>Software Engineer</td>
                                    <td>London</td>
                                    <td>41</td>
                                    <td>2012/10/13</td>
                                    <td>$132,000</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">Brenden Wagner</td>
                                    <td>Software Engineer</td>
                                    <td>San Francisco</td>
                                    <td>28</td>
                                    <td>2011/06/07</td>
                                    <td>$206,850</td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Brielle Williamson</td>
                                    <td>Integration Specialist</td>
                                    <td>New York</td>
                                    <td>61</td>
                                    <td>2012/12/02</td>
                                    <td>$372,000</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">Bruno Nash</td>
                                    <td>Software Engineer</td>
                                    <td>London</td>
                                    <td>38</td>
                                    <td>2011/05/03</td>
                                    <td>$163,500</td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Caesar Vance</td>
                                    <td>Pre-Sales Support</td>
                                    <td>New York</td>
                                    <td>21</td>
                                    <td>2011/12/12</td>
                                    <td>$106,450</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">Cara Stevens</td>
                                    <td>Sales Assistant</td>
                                    <td>New York</td>
                                    <td>46</td>
                                    <td>2011/12/06</td>
                                    <td>$145,600</td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2012/03/29</td>
                                    <td>$433,060</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="dataTables_info" id="datatable-buttons_info" role="status" aria-live="polite">
                            Showing 1 to 10 of 57 entries</div>
                        <div class="dataTables_paginate paging_simple_numbers" id="datatable-buttons_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous disabled" id="datatable-buttons_previous">
                                    <a href="#" aria-controls="datatable-buttons" data-dt-idx="0" tabindex="0"
                                        class="page-link"><i class="fas fa-angle-left"></i></a></li>
                                <li class="paginate_button page-item active"><a href="#"
                                        aria-controls="datatable-buttons" data-dt-idx="1" tabindex="0"
                                        class="page-link">1</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="datatable-buttons"
                                        data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="datatable-buttons"
                                        data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="datatable-buttons"
                                        data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="datatable-buttons"
                                        data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="datatable-buttons"
                                        data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                                <li class="paginate_button page-item next" id="datatable-buttons_next"><a href="#"
                                        aria-controls="datatable-buttons" data-dt-idx="7" tabindex="0"
                                        class="page-link"><i class="fas fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    @endsection
