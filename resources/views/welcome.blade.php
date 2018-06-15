@section('title','welcome')
@extends('layout.app')
@section('name','welcome')
@section('body')
    @foreach($data as $data1)
        <h3 class="modal-body"><span class="label label-primary">
        {{$data1->name}}
        </span></h3>
    @endforeach
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" name="demo">
        Launch demo modal
    </button>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button onclick="location.href='/form'" class="btn btn-primary" name="form">Form<u></u></button>
                    <hr>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                    @foreach($data as $data1)
                        <h3 class="modal-body"><span class="label label-primary">
                  {{$data1->name}}
                     </span></h3>
                    @endforeach
                </div>
                <div class="modal-body">
                    <input type="text" name="id" placeholder="ID" id="id">
                    <button type="button" class="btn btn-primary" id="submit"
                            onclick="location.href='/'+document.getElementById('id').value+'/edit';">Submit
                    </button>

                </div>
            </div>
        </div>
    </div>




    @endsection
