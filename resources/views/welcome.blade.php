<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Monster Builder</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- FontAwesome -->
        <script defer src="https://use.fontawesome.com/releases/v6.1.1/js/all.js" integrity="sha384-xBXmu0dk1bEoiwd71wOonQLyH+VpgR1XcDH3rtxrLww5ajNTuMvBdL5SOiFZnNdp" crossorigin="anonymous"></script>

    </head>
    <body>
        <div class="px-4 py-2 my-5 text-center">
            <h1 class="display-5 fw-bold">Monster Builder</h1>
            <div class="col-lg-6 mx-auto">
              <p class="lead mb-4">
                This is an example of using PHP Interfaces in Laravel to adhere to <b>SOLID</b> design.
            </p>
              <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a href="https://github.com/mark-stack/monster-builder-interface-example/tree/master" class="btn btn-primary btn-lg px-4 gap-3" style="background-color:#24292f" target="_blank">
                    <i class="fa-brands fa-github"></i> Github Repo
                </a>
              </div>
            </div>
        </div>

        <div class="container" style="max-width:900px">
            <div class="row g-4" style="padding:10px">
                @if ($errors->any())
                    <div class="alert alert-warning">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success">
                        {!! session('success') !!}
                    </div>
                @endif
                <div class="col-lg-4" style="">
                    <div class="p-3" style="border: solid grey 2px;border-radius:10px;height:100%">
                        <h3>Build a Monster</h3>
                        <form action="/" method="post"> 
                            @csrf
                            <select required class="form-control" name="type" style="margin-bottom:7px">
                                <option value="" disabled selected>Select Monster</option>
                                <option value="dragon">Dragon</option>
                                <option value="goblin">Goblin</option>
                            </select>
                            <input required class="form-control" type="number" step="1" min="0" max="6" id="arms" name="arms" placeholder="Number of Arms" style="margin-bottom:7px" value="{{ old('arms') }}">
                            <input required class="form-control" type="number" step="1" min="0" max="8" id="legs" name="legs" placeholder="Number of Legs" style="margin-bottom:7px" value="{{ old('legs') }}">
                            <br>
                            <button type="submit" class="btn btn-primary" style="width:100%">Create Monster</button>
                        </form>
                    </div>
                </div>
                
                <div class="col-lg-8">
                    <div class="p-3" style="border: solid grey 2px;border-radius:10px;">
                        <h3>Recent Monsters</h3>
                        <table style="width:100%">
                            <tr>
                                <th>Type</th>
                                <th>Arms</th>
                                <th>Legs</th>
                                <th>Strength</th>
                                <th>Jump height</th>
                                <th>Flying speed</th>
                            </tr>
                            @foreach($monsters as $monster)
                                <tr>
                                    <td>{{ ucfirst($monster->type) }}</td>
                                    <td>{{ $monster->arms }}</td>
                                    <td>{{ $monster->legs }}</td>
                                    <td>{{ $monster_objects[$monster->type]->strength($monster->arms) }}</td>
                                    <td>{{ $monster_objects[$monster->type]->jumpingHeight($monster->legs) }}cm</td>
                                    @if($monster->type == 'dragon') 
                                        <td>{{ $monster_objects[$monster->type]->flyingSpeed() }}</td>
                                    @else
                                        <td style="color:grey">Can't fly</td>
                                    @endif
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            <hr>
            <center>
                <h2 id="solid">Why it's SOLID code...</h2>
            </center>
            <div class="row g-4" style="padding:10px 10px 50px 10px">
                <div class="col-lg-5" style="">
                    <div class="p-3" style="border: solid grey 2px;border-radius:10px;height:100%">
                        <h5>SOLID principles</h5>
                        <p>
                            <ul>
                                <li><b>S</b>ingle responsibility classes.</li>
                                <li><b>O</b>pen for extension, closed for modification.</li>
                                <li><b>L</b>iskov Substitution: Make an Interface, and typehint the variables in the functions to prove alignment</li>
                                <li><b>I</b>nterface Segregation: Dont make a mega interface. Make several then you can have interface1, interface2, ....</li>
                                <li><b>D</b>ependency Inversion: High level functions shouldn't rely on low level functions</li>
                            </ul>
                        </p>
                    </div>
                </div>

                <div class="col-lg-7" style="">
                    <div class="p-3" style="border: solid grey 2px;border-radius:10px;">
                        <h4>Interface</h4>
                        <p>
                            The classes here and below are testable, maintainable, and extensible as it follows the SOLID pattern.
                            It's very easy to add monster classes in the future without needing to refactor the existing code.

                        </p>
                        @include('snippets.interface')
                    </div>
                </div>
                
                <div class="col-lg-12" style="">
                    <div class="p-3" style="border: solid grey 2px;border-radius:10px;">
                        <h4>Multiple Interfaces</h4>
                        <p>
                            <b>S:</b> Single purpose of Dragon attributes.<br> 
                            <b>O:</b> This is extensible. I can create new classes for future monsters like a "sea beast".<br>
                            <b>L:</b> Type hinted functions. e.g 'strength' must return a float.<br>
                            <b>I:</b> This implements multiple interfaces specific for Dragons. Dragons can fly whereas Goblins can't.<br>
                            <b>D:</b> High level function isn't depending on lower level functions.
                        </p>
                        @include('snippets.multi_interface')
                    </div>
                </div>
            </div>
            

        </div>
    </body>

    <!-- Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
