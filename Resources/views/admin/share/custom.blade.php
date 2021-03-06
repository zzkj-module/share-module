@extends('admin.public.header')
@section('listcontent')
<link rel="stylesheet" href="{{asset('layuimini/css/flex.css')}}" media="all">
<style>
    .mobile-box {
        width: 219px;
        height: 450px;
        background-image: url("/layuimini/images/share-custom/mobile-iphone.png");
        background-size: cover;
        position: relative;
        font-size: 13px;
        float: left;
        margin-right: 1rem;
    }

    .mobile-box .mobile-screen {
        position: absolute;
        top: 52px;
        left: 12px;
        right: 13px;
        bottom: 54px;
        border: 1px solid #999;
        background: #f5f7f9;
        overflow-y: hidden;
    }

    .mobile-box .mobile-navbar {
        position: absolute;
        top: 0px;
        left: 0px;
        right: 0px;
        height: 38px;
        line-height: 38px;
        text-align: center;
        background: #fff;
    }

    .mobile-box .mobile-content {
        position: absolute;
        top: 38px;
        left: 0;
        right: 0;
        bottom: 0;
        overflow-y: auto;
    }

    .mobile-box .mobile-content::-webkit-scrollbar {
        width: 2px;
    }

    .right-box .order-list > div {
        border: 1px solid #e3e3e3;
        border-right-width: 0;
        cursor: pointer;
    }

    .right-box .order-list > div:hover {
        background: #f6f8f9;
    }

    .right-box .order-list > div:last-child {
        border-right-width: 1px;
    }

    .content-block.head-block {
        padding: 12px;
        background-color: #1E9FFF;
    }

    .content-block.menu-block {
        background-color: #fff;;
    }

    .right-box .menu-box {
        border: 1px solid #e3e3e3;
    }

    .right-box .menu-box .menu-header {
        padding: 1rem;
        border-bottom: 1px solid #e3e3e3;
    }

    .right-box .menu-box .menu-list {
        padding: .5rem;
        background: #f6f8f9;
    }

    .right-box .menu-box .menu-item {
        background: #fff;
        padding: .5rem;
        margin: .25rem 0;
    }
    .float-right {
        float: right!important;
        margin-top: -11px;
        color:#0275d8;
    }
    
</style>
<form class="layui-form">
    <div class="layui-form layuimini-form">
        <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
            <legend>???????????????</legend>
        </fieldset>
        <div flex="dir:left box:first">
            <div class="left-box" style="margin-left: 80px;">
                <div class="mobile-box">
                    <div class="mobile-screen">
                        <div class="mobile-navbar">????????????</div>
                        <div class="mobile-content">
                            <div>
                                <div class="content-block head-block">
                                    <div flex="dir:left box:left">
                                        <div>
                                            <div
                                                style="display: inline-block;border: 2px solid #fff;background: #e3e3e3;width: 35px;height: 35px;border-radius: 999px"></div>
                                        </div>
                                        <div style="margin-left: 5px;color: #fff;">
                                            <div>????????????</div>
                                            <div>{{ $info['words']['parent_name']['name'] }}???????????????</div>
                                        </div>
                                    </div>
                                    <div flex="dir:left box:left" style="color: #fff;justify-content:space-between">
                                        <div>
                                            <div>{{ $info['words']['can_be_presented']['name'] }}</div>
                                            <div>0???</div>
                                        </div>
                                        <div>
                                            <div style="border: 1px solid #eee;padding: 2px;">{{ $info['words']['cash']['name'] }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div flex="dir:left box:mean" style="background-color: #fff;margin-bottom: 8px;padding: 10px 0;">
                                    <div class="text-center">
                                        <div style="color: #22af19;">{{ $info['words']['already_presented']['name'] }}</div>
                                        <div>0???</div>
                                    </div>
                                    <div class="text-center">
                                        <div style="color: #ff8f12;">{{ $info['words']['order_money_un']['name'] }}</div>
                                        <div>0???</div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-block menu-block">
                                <div flex="dir:left box:left" style="flex-wrap:wrap">
                                    @foreach($info['menus'] as $k=>$v)
                                        <div class="text-center" style="width: 33.3333333%;padding: 10px 0;">
                                            <img src="/{{ $v['icon'] }}" style="width: 17px;height: 16px">
                                            <div style="transform: scale(0.8);">{{ $v['name'] }}</div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-box">
                <div class="layui-form-item">
                    <label class="layui-form-label">??????</label>
                    <div class="layui-input-block" style="max-width: 360px">
                        <div class="order-list" flex="dir:left box:mean">
                            @foreach($info['menus'] as $k=>$v)
                                <div class="text-center pt-1 pb-1 edit-menus" data-value="{{ $k }}">
                                    <img id="{{ $k }}_icon" src="/{{ $v['icon'] }}" style="width: 17px;height: 16px">
                                    <div id="{{ $k }}_name" style="transform: scale(0.8);">{{ $v['name'] }}</div>
                                </div>
                                <input class="layui-input {{ $k }}_name" type="hidden" name="menus[{{ $k }}][name]" value="{{ $v['name'] }}">
                                <input class="layui-input {{ $k }}_icon" type="hidden" name="menus[{{ $k }}][icon]" value="{{ $v['icon'] }}">
                                <input class="layui-input" type="hidden" name="menus[{{ $k }}][open_type]" value="{{ $v['open_type'] }}">
                                <input class="layui-input" type="hidden" name="menus[{{ $k }}][url]" value="{{ $v['url'] }}">
                                <input class="layui-input" type="hidden" name="menus[{{ $k }}][tel]" value="{{ $v['tel'] }}">
                            @endforeach
                        </div>
                    </div>
                    
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">??????</label>
                    <div class="layui-input-block" style="max-width: 360px">
                        <div class="menu-box">
                            <div class="menu-header">
                                <a class="float-right" href="javascript:" id="edit-words" >??????</a>
                            </div>
                            <div class="menu-list">
                                @foreach($info['words'] as $k=>$v)
                                    <div class="menu-item" flex="dir:left box:justify cross:center">
                                        <div style="width: 50%;">{{$v['default']}}</div>
                                        <div>=></div>
                                        <div id="{{ $k }}">{{$v['name']}}</div>
                                        
                                    </div>
                                    <input class="layui-input {{ $k }}" type="hidden" name="words[{{ $k }}][name]" value="{{ $v['name'] }}">
                                    <input class="layui-input" type="hidden" name="words[{{ $k }}][default]" value="{{ $v['default'] }}">
                                @endforeach
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hr-line"></div>
        <div class="layui-form-item">
            <div class="layui-input-block">
                <button class="layui-btn layui-btn-normal" id="saveBtn" lay-submit lay-filter="saveBtn">??????</button>
            </div>
        </div>
    </div> 
</form>
<!-- ???????????? -->
<div class="layui-row" id="editWords" style="display:none;">
    <div class="layui-col-md11" style="margin-top: 20px;">
        <form class="layui-form">
            @foreach($info['words'] as $k=>$v)
                <div class="layui-form-item">
                    <label class="layui-form-label required">{{ $v['default'] }}</label>
                    <div class="layui-input-block">
                        <input class="layui-input" type="text" name="{{ $k }}" value="{{ $v['name'] }}">
                    </div>
                </div>
            @endforeach
            <div class="layui-form-item">
                <div class="layui-input-block">
                    <button class="layui-btn layui-btn-normal" lay-submit lay-filter="confirm">??????</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- ???????????? -->
<div class="layui-row" id="editMenus" style="display:none;">
    <div class="layui-col-md11" style="margin-top: 20px;">
        <form class="layui-form">
            <div class="layui-form-item">
                <label class="layui-form-label required">??????</label>
                <div class="layui-input-block" id="menus_name">
                    
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label required">??????</label>
                <div class="layui-input-block" id="menus_icon">
                    
                </div>
            </div>
            <div class="layui-form-item">
                <div class="layui-input-block">
                    <button class="layui-btn layui-btn-normal" lay-submit lay-filter="menus-confirm">??????</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('listscript')
    <script type="text/javascript">
        layui.use(['iconPickerFa', 'form', 'layer', 'upload', 'xmSelect'], function () {
            var iconPickerFa = layui.iconPickerFa,
                form = layui.form,
                layer = layui.layer,
                upload = layui.upload,
                xmSelect = layui.xmSelect,
                $ = layui.$;
            //????????????
            $(".edit-menus").click(function(){

                var value = $(this).data("value");//????????????
                //??????
                var name = $("."+value+"_name").val();
                var icon = $("."+value+"_icon").val();
                var domain = window.location.host;

                //???????????????
                var html_name = '<input class="layui-input" type="text" name="'+value+'_name_parent" value="'+name+'">';
                $("#menus_name").html(html_name);
                
                var html_icon = '<div class="layui-upload-drag '+value+'_upload_image"><i class="layui-icon">???</i><p>??????????????????????????????????????????</p><br><div class="'+value+'_upload_show_img"><img src="http://'+domain+'/'+icon+'" alt="?????????????????????" style="max-width: 50px"></div><input type="hidden" class="'+value+'_icon_image" name="'+value+'_icon_parent" value="'+icon+'" /></div>';
                $("#menus_icon").html(html_icon);
                
                var index = layer.open({
                    //layer?????????5????????????????????????????????????0????????????????????????1???????????????2???iframe??????3???????????????4???tips??????
                    type: 1,
                    title: '????????????',
                    shade: 0.2,
                    maxmin:true,
                    skin:'layui-layer-lan',
                    area: ['35%','50%'],
                    content:$("#editMenus").html()
                });
                //????????????
                upload.render({
                    elem: '.'+value+'_upload_image'
                    ,url: '/admin/upload/upload' //??????????????????????????????
                    ,accept: 'images'
                    ,acceptMime: 'image/*'
                    ,size: 400 //??????????????????????????? KB
                    ,headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
                    ,before: function(obj){
                        //????????????????????????????????????ie8
                        obj.preview(function(index, file, result){
                            console.log(result);
                            $('.'+value+'_upload_show_img').find('img').attr('src', result);
                        });
                    }
                    ,done: function(res){
                        if(res.code==0){
                            layer.msg("????????????",{icon: 1});
                            console.log(res.data[0]);
                            $("."+value+"_icon_image").val(res.data[0]);
                        }else{
                            layer.msg(res.message,{icon: 2});
                            $("."+value+"_icon_image").val('');
                        }
                    }
                });

            });
            
            
            
            //????????????
            $("#edit-words").click(function(){
                var index = layer.open({
                    //layer?????????5????????????????????????????????????0????????????????????????1???????????????2???iframe??????3???????????????4???tips??????
                    type: 1,
                    title: '????????????',
                    shade: 0.2,
                    maxmin:true,
                    skin:'layui-layer-lan',
                    area: ['40%','80%'],
                    content:$("#editWords").html()
                    
                });
            });
            
            //????????????
            form.on('submit(saveBtn)', function(data){
                $("#saveBtn").addClass("layui-btn-disabled");
                $("#saveBtn").attr('disabled', 'disabled');
                var loading = layer.msg('?????????..', {icon: 16,shade: 0.3,time: false});
                $.ajax({
                    url:'/admin/share/editCustom',
                    type:'post',
                    data:data.field,
                    dataType:'JSON',
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    success:function(data){
                        layer.close(loading);  //??????????????????loading
                        if(data.code==0){
                            layer.msg(data.message,{icon: 1,time:1500},function(){
                                setTimeout('location.reload()',500);
                            });
                        }else{
                            layer.msg(data.message,{icon: 2});
                            $("#saveBtn").removeClass("layui-btn-disabled");
                            $("#saveBtn").removeAttr('disabled');
                        }
                    }
                });
                return false;
            });
            //????????????????????????
            form.on('submit(menus-confirm)', function(data){
                console.log(data.field)
                var domain = window.location.host;

                //????????????
                if(data.field.money_name_parent || data.field.money_icon_parent){
                    $("#money_name").text(data.field.money_name_parent);
                    $("#money_icon").attr('src', 'http://'+ domain +'/'+ data.field.money_icon_parent);
                    $(".money_name").val(data.field.money_name_parent);
                    $(".money_icon").val(data.field.money_icon_parent);
                }

                //????????????
                if(data.field.order_name_parent || data.field.order_icon_parent){
                    $("#order_name").text(data.field.order_name_parent);
                    $("#order_icon").attr('src', 'http://'+ domain +'/'+ data.field.order_icon_parent);
                    $(".order_name").val(data.field.order_name_parent);
                    $(".order_icon").val(data.field.order_icon_parent);
                }
                

                layer.closeAll();
                return false;
            });
            //????????????????????????
            form.on('submit(confirm)', function(data){
                console.log(data.field)
                //???????????????
                $("#can_be_presented").text(data.field.can_be_presented);
                $(".can_be_presented").val(data.field.can_be_presented);
                
                //???????????????
                $("#already_presented").text(data.field.already_presented);
                $(".already_presented").val(data.field.already_presented);

                //?????????
                $("#parent_name").text(data.field.parent_name);
                $(".parent_name").val(data.field.parent_name);

                //???????????????
                $("#pending_money").text(data.field.pending_money);
                $(".pending_money").val(data.field.pending_money);

                //??????
                $("#cash").text(data.field.cash);
                $(".cash").val(data.field.cash);

                //????????????
                $("#user_instructions").text(data.field.user_instructions);
                $(".user_instructions").val(data.field.user_instructions);

                //????????????
                $("#apply_cash").text(data.field.apply_cash);
                $(".apply_cash").val(data.field.apply_cash);
                
                //????????????
                $("#cash_type").text(data.field.cash_type);
                $(".cash_type").val(data.field.cash_type);

                //????????????
                $("#cash_money").text(data.field.cash_money);
                $(".cash_money").val(data.field.cash_money);

                //???????????????
                $("#order_money_un").text(data.field.order_money_un);
                $(".order_money_un").val(data.field.order_money_un);

                layer.close(layer.index);
                return false;
            });
        });
    </script>
@endsection