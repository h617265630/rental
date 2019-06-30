@extends('layouts.master')
@section('content')
    <div class="admin-content">
        <div class="admin-content-body">
            <div class="am-cf am-padding am-padding-bottom-0">
                <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">租房用户列表</strong> / <small>Tenants List</small></div>
            </div>

            <hr>

            <div class="am-g">
                <div class="am-u-sm-12 am-u-md-6">
                    <div class="am-btn-toolbar">
                        <div class="am-btn-group am-btn-group-xs">
                            <button type="button" class="am-btn am-btn-default"><span class="am-icon-plus"></span> 添加新租户</button>
                            {{--<button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 保存</button>--}}
                            {{--<button type="button" class="am-btn am-btn-default"><span class="am-icon-archive"></span> 审核</button>--}}
                            {{--<button type="button" class="am-btn am-btn-default"><span class="am-icon-trash-o"></span> 删除</button>--}}
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
                                {{--<th class="table-check"><input type="checkbox" /></th>--}}
                                <th class="table-id">ID</th><th class="table-title">租户名称</th><th class="table-type">性别</th><th class="table-author am-hide-sm-only">年龄</th><th class="table-date am-hide-sm-only">联系方式</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $u)
                            <tr>
                                {{--<td><input type="checkbox" /></td>--}}
                                <td>{{$u->id}}</td>
                                <td><a href="#">{{$u->username}}</a></td>
                                <td>{{$u->gender}}</td>
                                <td class="am-hide-sm-only">{{$u->age}}</td>
                                <td class="am-hide-sm-only">{{$u->phone}}</td>
                                {{--<td>--}}
                                    {{--<div class="am-btn-toolbar">--}}
                                        {{--<div class="am-btn-group am-btn-group-xs">--}}
                                            {{--<button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span>修改</button>--}}
                                            {{--<button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-copy"></span> 复制</button>--}}
                                            {{--<button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</td>--}}
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="am-cf">
                            共 1 个租户
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
                        <p>提醒所有租客按时交租</p>
                    </form>
                </div>
            </div>
        </div>

        <footer class="admin-content-footer">
            <hr>
            <p class="am-padding-left">© 2019 passion fruit co.</p>
        </footer>

    </div>
@endsection