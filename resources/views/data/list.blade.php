<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
<body>
    <div class="container">
        @if (Session::get('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
        @endif
        @php
            Session::put('success', NULL);
        @endphp
        <div class="card" style="overflow-x: scroll;">
            <div class="card-header">
                <h4>List</h4>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">latitude</th>
                        <th scope="col">longitude</th>
                        <th scope="col">A</th>
                        <th scope="col">B</th>
                        <th scope="col">C</th>
                        <th scope="col">D</th>
                        <th scope="col">E</th>
                        <th scope="col">F</th>
                        <th scope="col">G</th>
                        <th scope="col">H</th>
                        <th scope="col">I</th>
                        <th scope="col">J</th>
                        <th scope="col">L</th>
                        <th scope="col">M</th>
                        <th scope="col">N</th>
                        <th scope="col">O</th>
                        <th scope="col">P</th>
                        <th scope="col">Q</th>
                        <th scope="col">U</th>
                        <th scope="col">R</th>
                        <th scope="col">S</th>
                        <th scope="col">T</th>
                        <th scope="col">U</th>
                        <th scope="col">V</th>
                        <th scope="col">W</th>
                        <th scope="col">X</th>
                        <th scope="col">Y</th>
                        <th scope="col">Z</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $i =1;
                        @endphp
                        @foreach ($collection as $item)
                            <tr>
                                <th scope="row">{{$i}}</th>
                                <td>{{$item->latitude}}</td>
                                <td>{{$item->longitude}}</td>
                                <td>{{$item->a}}</td>
                                <td>{{$item->b}}</td>
                                <td>{{$item->c}}</td>
                                <td>{{$item->d}}</td>
                                <td>{{$item->e}}</td>
                                <td>{{$item->f}}</td>
                                <td>{{$item->g}}</td>
                                <td>{{$item->h}}</td>
                                <td>{{$item->i}}</td>
                                <td>{{$item->j}}</td>
                                <td>{{$item->k}}</td>
                                <td>{{$item->l}}</td>
                                <td>{{$item->m}}</td>
                                <td>{{$item->n}}</td>
                                <td>{{$item->o}}</td>
                                <td>{{$item->p}}</td>
                                <td>{{$item->q}}</td>
                                <td>{{$item->u}}</td>
                                <td>{{$item->r}}</td>
                                <td>{{$item->s}}</td>
                                <td>{{$item->t}}</td>
                                <td>{{$item->u}}</td>
                                <td>{{$item->v}}</td>
                                <td>{{$item->w}}</td>
                                <td>{{$item->x}}</td>
                                <td>{{$item->y}}</td>
                                <td>{{$item->z}}</td>
                            </tr>
                            @php
                                $i++;
                            @endphp
                        @endforeach
                      
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>