@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                             <div class="card">
                <div class="card-header"><h2>Developers</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <hr size="30">

                   
                   Chebb Jenson J. Magallano
                   <hr size="30">

                </div>
                <div class="card-header"><h2>About the page</h2></div>
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                   <p>Developing a Shopping cart online using laravel with users can able to register and log-in.</p>
                </div>
                <hr size="30">


                <div class="card-header"><h2>Dummy Accounts</h2></div>
              
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                   <br>
            <table style="width:100%" >
              <tr>
                <th>Email</th>
                <th>Password</th> 
               
              </tr>

              <tr>
                <td>Magallano@gmail.com</td>
                <td>adiksichebb</td> 
                
              </tr>
            </table>
                </div>
            </div>
            <br>
            <center>
                   <a href="{{ url('/item') }}" class="btn btn-primary">Item list</a>

                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
