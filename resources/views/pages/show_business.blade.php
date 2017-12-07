@extends('layouts.app')
@section('title', '展示')

@section('content')
<section id = 'main-content'>
  <section class="wrapper">
    <div class="form-w3layouts">
      <div class="row">
      <div class="col-lg-12">
        <div class="panel-body">
          <div class="position-center">
            <div class="text-center">
              <a href="#myModal" data-toggle="modal" class="btn btn-success">新增</a>
            </div>
            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                        <h4 class="modal-title text-center">船名/航次</h4>
                    </div>
                    <div class="modal-body text-center">
                        <form class="form-inline" role="form">
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputEmail2">船名/航次</label>
                                <input type="text" class="form-control sm-input" id="">/
                                <input type="text" class="form-control sm-input" id="" name="" value="">
                            </div>
                            <a href="{{route('new_business')}}" class="btn btn-default">确认</a>
                        </form>

                    </div>

                </div>
            </div>
        </div>
          </div>
        </div>
      <section class="panel">
          <header class="panel-heading">
              业务明细
          </header>
          <div class="panel-body">
              <p>这是展示部分。</p>
          </div>
      </section>
      </div>
      </div>
    </div>
  </section>
</section>
@stop
