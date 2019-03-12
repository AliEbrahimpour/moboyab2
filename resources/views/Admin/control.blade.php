@extends('layouts.admin_panel')
@section('body')
    <main class="main">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>میزان استفاده دستورات</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-sm">
                            <thead>
                            <tr>
                                <th>نام دستور</th>
                                <th>تعداد استفاده</th>
                                <th>تعداد موفق</th>
                                <th>تعداد ناموفق</th>
                                <th>جزییات</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Vishnu Serghei</td>
                                <td>20</td>
                                <td>20</td>
                                <td>20</td>
                                <td>
                                    <button class="btn btn-block">مشاهده جزییات</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Zbyněk Phoibos</td>
                                <td>30</td>
                                <td>30</td>
                                <td>30</td>
                                <td>
                                    <button class="btn btn-block">مشاهده جزییات</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Einar Randall</td>
                                <td>15</td>
                                <td>15</td>
                                <td>15</td>
                                <td>
                                    <button class="btn btn-block">مشاهده جزییات</button>

                                </td>
                            </tr>
                            <tr>
                                <td>Félix Troels</td>
                                <td>40</td>
                                <td>40</td>
                                <td>40</td>
                                <td>
                                    <button class="btn btn-block">مشاهده جزییات</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Aulus Agmundr</td>
                                <td>50</td>
                                <td>50</td>
                                <td>50</td>
                                <td>
                                    <button class="btn btn-block">مشاهده جزییات</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <nav>
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Prev</a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">4</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!--/.col-->

        </div>
        <!--/.row-->
    </main>
@endsection