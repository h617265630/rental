@extends('layouts.master')
@section('content')
    <!-- content start -->
    <div class="admin-content">
        <div class="admin-content-body">
            <div class="am-cf am-padding am-padding-bottom-0">
                <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">公司</strong> / <small>Company</small></div>
            </div>

            <hr>

            <div class="am-g">
                <div class="am-u-sm-12 am-u-md-6">
                    <div class="am-btn-toolbar">
                        <div class="am-btn-group am-btn-group-xs">
                            <button type="button" class="am-btn am-btn-default"><span class="am-icon-plus"></span> 新增</button>
                        </div>
                    </div>
                </div>
                <div class="am-u-sm-12 am-u-md-3">
                </div>
                <div class="am-u-sm-12 am-u-md-3">
                    <div class="am-input-group am-input-group-sm">
                        <input type="text" class="am-form-field">
                        <span class="am-input-group-btn">
            <button class="am-btn am-btn-default" type="button">搜索</button>
          </span>
                    </div>
                </div>
            </div>

            <div class="am-g">
                <div class="am-u-sm-12">
                    <form class="am-form">
                        <table class="am-table am-table-striped am-table-hover table-main">
                            <thead>
                            <tr>
                                <th class="table-title">企业名称</th><th class="table-title">社会统一信用代码</th><th class="table-title">公司分类</th><th class="table-title">公司主营业务</th>
                                <th class="table-title">法人姓名</th><th class="table-title">法人联系方式</th><th class="table-title">法人身份证号</th>
                                <th class="table-title">户籍</th><th class="table-title">法人毕业院校</th><th class="table-title">法人毕业年份</th>
                                <th class="table-title">法人学位</th><th class="table-title">企业实际负责人姓名</th><th class="table-title">负责人电话</th>
                                <th class="table-set">操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $d)
                            <tr>
                                <td>{{$d->name}}</td>
                                <td>{{$d->code_id}}</td>
                                <td>{{$d->category}}</td>
                                <td>{{$d->main_business}}</td>
                                <td>{{$d->corporation}}</td>
                                <td>{{$d->corporation_contact}}</td>
                                <td>{{$d->corporation_id}}</td>
                                <td>{{$d->household}}</td>
                                <td>{{$d->graduated_school}}</td>
                                <td>{{$d->graduated_time}}</td>
                                <td>{{$d->graduated_degree}}</td>
                                <td>{{$d->company_admin_name}}</td>
                                <td>{{$d->company_admin_contact}}</td>
                                <td>
                                    <div class="am-btn-toolbar">
                                        <div class="am-btn-group am-btn-group-xs">
                                            <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                                            {{--<button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-copy"></span> 复制</button>--}}
                                            <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="am-cf">
                            共 15 条记录
                            <div class="am-fr">
                                <ul class="am-pagination">
                                    <li class="am-disabled"><a href="#">«</a></li>
                                    <li class="am-active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">»</a></li>
                                </ul>
                            </div>
                        </div>
                        <hr />
                        <p>注：.....</p>
                    </form>
                </div>

            </div>
        </div>

        <footer class="admin-content-footer">
            <hr>
            <p class="am-padding-left">© 2019 passion fruit co.</p>
        </footer>

    </div>
    <!-- content end -->
@endsection
