@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Basic datatable</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                </div>
            </div>
        </div>

        <div class="card-body">
            The <code>DataTables</code> is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table. DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function. Searching, ordering, paging etc goodness will be immediately added to the table, as shown in this example. <strong>Datatables support all available table styling.</strong>
        </div>

        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">

            <div class="datatable-scroll"><table class="table datatable-basic dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                    <thead>
                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="First Name: activate to sort column descending">First Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending">Last Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Job Title: activate to sort column ascending">Job Title</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="DOB: activate to sort column ascending">DOB</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Status</th><th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 100px;">Actions</th></tr>
                    </thead>
                    <tbody>















                    <tr role="row" class="odd">
                        <td class="sorting_1">Aura</td>
                        <td>Hard</td>
                        <td>Business Services Sales Representative</td>
                        <td>19 Apr 1969</td>
                        <td><span class="badge badge-danger">Suspended</span></td>
                        <td class="text-center">
                            <div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr><tr role="row" class="even">
                        <td class="sorting_1">Chantal</td>
                        <td><a href="#">Nailor</a></td>
                        <td>Technical Services Librarian</td>
                        <td>10 Jan 1980</td>
                        <td><span class="badge badge-secondary">Inactive</span></td>
                        <td class="text-center">
                            <div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr><tr role="row" class="odd">
                        <td class="sorting_1">Cicely</td>
                        <td>Sigler</td>
                        <td><a href="#">Senior Research Officer</a></td>
                        <td>15 Mar 1960</td>
                        <td><span class="badge badge-info">Pending</span></td>
                        <td class="text-center">
                            <div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr><tr role="row" class="even">
                        <td class="sorting_1">Coy</td>
                        <td>Wollard</td>
                        <td>Customer Service Operator</td>
                        <td>12 Oct 1982</td>
                        <td><span class="badge badge-success">Active</span></td>
                        <td class="text-center">
                            <div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr><tr role="row" class="odd">
                        <td class="sorting_1">Delma</td>
                        <td>Bonds</td>
                        <td>Lead Brand Manager</td>
                        <td>21 Dec 1968</td>
                        <td><span class="badge badge-info">Pending</span></td>
                        <td class="text-center">
                            <div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr><tr role="row" class="even">
                        <td class="sorting_1">Jackelyn</td>
                        <td>Weible</td>
                        <td><a href="#">Airline Transport Pilot</a></td>
                        <td>3 Oct 1981</td>
                        <td><span class="badge badge-secondary">Inactive</span></td>
                        <td class="text-center">
                            <div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr><tr role="row" class="odd">
                        <td class="sorting_1">Kennedy</td>
                        <td>Haley</td>
                        <td>Senior Marketing Designer</td>
                        <td>18 Dec 1960</td>
                        <td><span class="badge badge-success">Active</span></td>
                        <td class="text-center">
                            <div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr><tr role="row" class="even">
                        <td class="sorting_1">Lizzee</td>
                        <td><a href="#">Goodlow</a></td>
                        <td>Technical Services Librarian</td>
                        <td>1 Nov 1961</td>
                        <td><span class="badge badge-danger">Suspended</span></td>
                        <td class="text-center">
                            <div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr><tr role="row" class="odd">
                        <td class="sorting_1">Marth</td>
                        <td><a href="#">Enright</a></td>
                        <td>Traffic Court Referee</td>
                        <td>22 Jun 1972</td>
                        <td><span class="badge badge-success">Active</span></td>
                        <td class="text-center">
                            <div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr><tr role="row" class="even">
                        <td class="sorting_1">Maxine</td>
                        <td><a href="#">Woldt</a></td>
                        <td><a href="#">Business Services Sales Representative</a></td>
                        <td>17 Oct 1987</td>
                        <td><span class="badge badge-info">Pending</span></td>
                        <td class="text-center">
                            <div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr></tbody>
                </table></div><div class="datatable-footer"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 15 entries</div><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><a class="paginate_button previous disabled" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" id="DataTables_Table_0_previous">→</a><span><a class="paginate_button current" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0">2</a></span><a class="paginate_button next" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" id="DataTables_Table_0_next">←</a></div></div></div>
    </div>
    @endsection
