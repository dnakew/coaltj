@extends('layouts.app')

@section('content')
<section id = 'main-content'>
  <section class="wrapper">
    <div class="form-w3layouts">
      <div class="row">
      <div class="col-lg-12">
      <section class="panel">
          <header class="panel-heading">
              航次信息
          </header>
          <div class="panel-body">
              <form class="form-horizontal bucket-form" method="get">
                  <div class="form-group">
                      <label class="col-sm-3 control-label">船名/航次</label>
                      <div class="col-sm-6">
                          <input type="text" class="form-control" value="‘获取得到’" placeholder="无效船名！" disabled="">
                          <!-- <span class="help-block">输入船名+航次</span> :可以对填写内容说明-->
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-sm-3 control-label">预报船期</label>
                      <div class="col-sm-6">
                          <input type="date" class="form-control" >
                          <span class="help-block">预计装船日期</span>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-sm-3 control-label">装船期限</label>
                      <div class="col-sm-6">
                          <input type="date" class="form-control" value="">~<input type="date" class="form-control" value="">
                          <!-- <span class="help-block">输入船名+航次</span> :可以对填写内容说明-->
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-sm-3 control-label">装运港</label>
                      <div class="col-sm-6">
                          <input type="text" class="form-control round-input">
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-sm-3 control-label">中转港</label>
                      <div class="col-sm-6">
                          <input type="text" class="form-control round-input">
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-sm-3 control-label">目的港</label>
                      <div class="col-sm-6">
                          <input type="text" class="form-control round-input">
                      </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-6">
                      <button type="submit" name="button" class="btn btn-success">保存</button>
                    </div>
                  </div>
              </form>
          </div>
      </section>
      <section class="panel">
        <header class="panel-heading">
          采购信息
        </header>
        <div class="panel-body">
          <form class="form-horizontal bucket-form" action="" method="post">
            <div class="form-group">
                <label class="col-sm-3 control-label">供应商</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" value="">
                    <!-- <span class="help-block">输入船名+航次</span> :可以对填写内容说明-->
                </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">采购分类</label>
                <div class="col-lg-6">
                    <select class="form-control m-bot15">
                        <option>自产</option>
                        <option>外购</option>
                    </select>

                    <!-- <span class="help-block">输入船名+航次</span> :可以对填写内容说明-->
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">采购煤种</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" value="">
                    <!-- <span class="help-block">输入船名+航次</span> :可以对填写内容说明-->
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">预装数量</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" value="">
                    <!-- <span class="help-block">输入船名+航次</span> :可以对填写内容说明-->
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">发站</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" value="">
                    <!-- <span class="help-block">输入船名+航次</span> :可以对填写内容说明-->
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">垛位</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" value="">
                    <!-- <span class="help-block">输入船名+航次</span> :可以对填写内容说明-->
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">采购价格</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" value="">
                    <!-- <span class="help-block">输入船名+航次</span> :可以对填写内容说明-->
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">当期价格上限</label>
                <div class="col-md-2 control-label">
                    <input type="text" placeholder=".col-md-2" class="form-control">
                </div>
                <label class="col-sm-3">（元/吨）</label>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">检验机构</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" value="">
                    <!-- <span class="help-block">输入船名+航次</span> :可以对填写内容说明-->
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">谈判日期</label>
                <div class="col-sm-6">
                    <input type="date" class="form-control" value="">
                    <!-- <span class="help-block">输入船名+航次</span> :可以对填写内容说明-->
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">装船质量</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" value="">
                    <!-- <span class="help-block">输入船名+航次</span> :可以对填写内容说明-->
                </div>
            </div>


          </form>
        </div>
      </section>
      <section class="panel">
        <header class="panel-heading">
          销售信息
        </header>
        <div class="panel-body">
          <form class="form-horizontal bucket-form" action="" method="post">
            <div class="form-group">
                <label class="col-sm-3 control-label">客户</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" value="">
                    <!-- <span class="help-block">输入船名+航次</span> :可以对填写内容说明-->
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">收货人</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" value="">
                    <!-- <span class="help-block">输入船名+航次</span> :可以对填写内容说明-->
                </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">销售分类</label>
                <div class="col-lg-6">
                    <select class="form-control m-bot15">
                        <option>分销</option>
                        <option>外购分销</option>
                        <option>外购外销</option>
                    </select>

                    <!-- <span class="help-block">输入船名+航次</span> :可以对填写内容说明-->
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">销售煤种</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" value="">
                    <!-- <span class="help-block">输入船名+航次</span> :可以对填写内容说明-->
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">预装数量</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" value="">
                    <!-- <span class="help-block">输入船名+航次</span> :可以对填写内容说明-->
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">销售价格</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" value="">
                    <!-- <span class="help-block">输入船名+航次</span> :可以对填写内容说明-->
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">检验机构</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" value="">
                    <!-- <span class="help-block">输入船名+航次</span> :可以对填写内容说明-->
                </div>
            </div>
          </form>
        </div>
      </section>
      </div>
      </div>
    </div>
  </section>
</section>
@stop
