@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
      <div class="container">
        <center><h2>Registro De Coneja Productora:</h2></center>

    </br>
          <form action="{{url('/productora')}}" method="post">
            {{ csrf_field() }}
          <div class="form-group" >
            <label for="Coneja_Productora">Número de tatuaje de la coneja:</label>
           <select class="form-control" name="Id_Conejo_Hembra">
              <option> -- Seleccione los tatuajes del conejo -- </option>
              @foreach ($conejos as $conejo)
                @if( $conejo->Genero == 'Hembra')
                @if( $conejo->Status == 'Vivo')
                @if( $conejo->Productora != 'Si')
                  <option value="{{$conejo->Id_Conejo}}">{{$conejo->Tatuaje_Derecho . " - " . $conejo->Tatuaje_Izquierdo}}</option>
                @endif
                @endif
                @endif
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="Coneja_Productora">Código de conejo:</label>
            <select class="form-control" name="Numero_Conejo">
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
            <option value="32">32</option>
            <option value="33">33</option>
            <option value="34">34</option>
            <option value="35">35</option>
            <option value="36">36</option>
            <option value="37">37</option>
            <option value="38">38</option>
            <option value="39">39</option>
            <option value="40">40</option>
            <option value="41">41</option>
            <option value="42">42</option>
            <option value="43">43</option>
            <option value="44">44</option>
            <option value="45">45</option>
            <option value="46">46</option>
            <option value="47">47</option>
            <option value="48">48</option>
            <option value="49">49</option>
            <option value="50">50</option>

            </select>
          </div>
        <br>
          <div align="right"><button type="submit" class="btn btn-outline-primary">Registrar</button>


        </form>
      </div>
@endsection
