<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<script src="{{ asset('https://code.jquery.com/jquery-3.3.1.min.js') }}" type="text/javascript"></script>
<link rel="stylesheet" href="{{asset ('https://use.fontawesome.com/releases/v5.3.1/css/all.css') }}">
<link href="{{asset ('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
<script type="text/javascript"  src="{{ asset('js/nicEdit.js') }}"></script>
<script type="text/javascript"  src="{{ asset('js/jquery.multi-select.js') }}" ></script>
<script  src="{{ asset('js/jquery.quicksearch.min.js') }}"></script>
<script type="text/javascript"  src="{{ asset('js/jquery.basictable.js') }}" ></script>
<script src="{{asset ('https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js') }}"></script>
<script  src="{{ asset('public/ckeditor/ckeditor.js') }}"></script>
<script>
  $(function () {
    $('input#id_search').quicksearch('.ms-selectable li');
  });
</script>
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<link rel="stylesheet" href="{{ asset('css/multi-select.css') }}">
   <title>Create Contract</title>
</head>
<body>
  {{-- @if ($errors->any())
  @foreach ($errors->all() as $error )
      <p>{{ $error }}</p>
  @endforeach  
  @endif --}}
  <form action="{{ url('/commissions') }}" method="post" enctype="multipart/form-data">  
      @csrf
<div class="wrapper">
        <div class="header" style="background-color:#1f2746;"><span class="lt"><i class="fas fa-file-contract"></i> New Contract</span><span class="rt"><a href="index.php">Back to airlines <i class="fas fa-undo"></i></a></span>
            </div>
<br>
            <div class="table-responsive">
    <table class="table table-bordered" id="crud_table">
     <tr>
      <th style="color:#fff;">Origin</th>
      <th style="color:#fff;">Destination</th>
      <th style="color:#fff;">Booking Class</th>
      <th style="color:#fff;">Season</th>
      <th style="color:#fff;">Ticket Designator</th>
      <th style="color:#fff;">Tour Code</th>
      <th style="color:#fff;">Clients %</th>
      <th style="color:#fff;">ATS %</th>
      <th style="color:#fff;">Remarks</th>
      <th style="color:#fff;"></th>
     </tr>
     <tr>
      <td contenteditable="true" class="Origin"></td>
      <td contenteditable="true" class="Destination"></td>
      <td contenteditable="true" class="Booking_Class"></td>
      <td contenteditable="true" class="Season"></td>
      <td contenteditable="true" class="Ticket_Designator"></td>
      <td contenteditable="true" class="Tour_Code"></td>
      <td contenteditable="true" class="Clients"></td>
      <td contenteditable="true" class="ATS"></td>
      <td contenteditable="true" class="Remarks"></td>
      <td></td>
     </tr>
    </table>
    <div align ="right">
     <button type="button" name="add" id="add" class="btn btn-primary btn-xs">Add</button>
    </div>
  <!--------------------<terms form>------------------------------------>
  <div class="container">         
      <div class="container_col">
      
      <div>
            <label>Order</label>
            <input name="terms_no" class="terms_no" type="text" >
          </div>
                <div>
            <label> Name</label>
            <input name="terms_name" class="terms_name" type="text" >
          </div>
          <div>
                <label>Group</label>
          <select name="com_region" class="com_region" com_code="" com_contract="">
         <option value="1">None</option>
           <option value="2">Latin / South America / Caribbean / Mexico</option>
           <option value="4">South Pacific (Australia / New Zealand)</option>
           <option value="5">WB</option>
           <option value="6">EB</option>
           <option value="7">EB / WB</option>
           <option value="8">EB Pacific Destination</option>
           <option value="9">EB / WB Transpacific Asia / Japan / China * t-1270</option>
           <option value="10">EB / WB South Pacific</option>
           <option value="128">SFO to CI TC3</option>
           <option value="129">NEW ZELAND</option>
           <option value="130"> LAX/ONT/SFO/JFK/HNL/YVR to TC3 CI/AE on-line destinations </option>
           <option value="12">Europe / Middle East / Africa / India / Asia (via Atlantic)</option>
           <option value="13">EB / WB Central / South America</option>
           <option value="14">EB / WB South Pacific (Australia / New Zealand)</option>
           <option value="15">Atlantic Contract</option>
           <option value="16">EB / WB Pacific</option>
           <option value="30">Middle East</option>
           <option value="34">EB / WB Middle East</option>
           <option value="20">WB Europe / Middle East / Africa / India / Asia (via Atlantic) - Selected Cities</option>
           <option value="33">EB / WB Transpacific Asia/Japan agreement #1251</option>
           <option value="31">(Transatlantic) United Kingdom</option>
           <option value="58">YTO - BEG VIA AMS</option>
           <option value="35">Asia - Oceania - Europe - Africa</option>
           <option value="32">WB - Ghana and Senegal</option>
           <option value="27">Central / South America</option>
           <option value="28">EB / WB North America / Pacific</option>
           <option value="29">Korea / China / Japan / S.E.A. / Europe / Africa / Middle East</option>
           <option value="59">BEG - CANADA VIA (EUROPE CITIES)</option>
           <option value="41">ME / LH BUSINESS FARES FROM USA - BEIRUT</option>
           <option value="42">USA - Mexico</option>
           <option value="43">ET / USA</option>
           <option value="85">AA-ME North Atlantic to Bey via FRA</option>
           <option value="44">ET / WB USA & CANADA</option>
           <option value="45">ET / ALL OTHER DESTINATIONS</option>
           <option value="46">TB / Belgium SPECIAL COMMISSION </option>
           <option value="47">EB OUTSID INDIA</option>
           <option value="48">EB PORTUGAL, EUROPE & AFRICA</option>
           <option value="80">JU -BA</option>
           <option value="54">YHZ/YYZ/YVR/YXY/YYC - BEG VIA FRA</option>
           <option value="55">BEG VIA EUROPEAN SECTORS DEFINED IN THIS PRICELIST</option>
           <option value="56">BEG - YYZ VIA WAW</option>
           <option value="57">USA - BEG VIA LHR</option>
           <option value="66">BEG - YTO VIA AMS</option>
           <option value="60">BEG - YTO/YVR/YMQ/YYC VIA LHR</option>
           <option value="61">BEG - NYC/CHI VIA WAW</option>
           <option value="62">NYC - BEG VIA BRU</option>
           <option value="63">AMERICAS CITIES - BEG VIA FRA</option>
           <option value="64">YTO/YVR/YMQ/YYC - BEG VIA LHR</option>
           <option value="65">BEG - EU/TLV</option>
           <option value="67">AMERICAS CITIES - BEG VIA FCO/MXP</option>
           <option value="68">YYZ - BEG VIA
WAW</option>
           <option value="69">BEG - USA VIA LHR</option>
           <option value="70">CANADA - BEG VIA (EUROPE CITIES)</option>
           <option value="71">YYZ - BEG VIA FCO</option>
           <option value="72">CX NETWORK</option>
           <option value="73">USA - QR NETWORK</option>
           <option value="75">USA / CANADA - RJ NETWORK</option>
           <option value="76">BEG - AMERICAS CITIES VIA FRA</option>
           <option value="77">USA / CANADA - PHILIPPINES & OTHER PR NETWORK</option>
           <option value="78">USA / CANADA - TC3</option>
           <option value="84">NYC-ASIA</option>
           <option value="83">AA-JU</option>
           <option value="86">TRANSATLANTIC TO BEG VIA European Sector</option>
           <option value="87">BEY to North Atlantic via PAR/LON/FRA/MIL/ROM/ATH/BRU</option>
           <option value="88">AF-US TO DKR /LOS /ACC</option>
           <option value="89">US - United Kingdom via Atlantic exclude LON</option>
           <option value="138">US-UK*1273</option>
           <option value="91">US - EMEAI /ASIA VIA ATLANTIC</option>
           <option value="92">EMEAI /ASIA VIA ATLANTIC TO US </option>
           <option value="93">US TO DKR /LOS /ACC</option>
           <option value="94">USA TO ASIA Pacific</option>
           <option value="95">China to United States</option>
           <option value="96">USA TO S.E ASIA</option>
           <option value="97">USA TO ASIA </option>
           <option value="98">USA TO Australia &NewZeland</option>
           <option value="99">USA TO Brazil / Argentina, Chile, Peru, Colombia , Panama</option>
           <option value="100">ME-AA from North Atlantic to BEY via Europe</option>
           <option value="101">ME -AA from BEY to North Atlantic via Europe </option>
           <option value="102">ME-AA from North Atlantic to BEY via FRA</option>
           <option value="103">AA-JU Transatlantic to BEG via European sectors</option>
           <option value="104">JU -AZ</option>
           <option value="105">JU- AC from Canada to BEG via Europe</option>
           <option value="106">NYC TO BEG VIA BRU SN/JU</option>
           <option value="107">US - MEX,MLM,OAX,AGU,MZT,ZCL,SLP,BJX,QRO,MID,TGZ,GDL,</option>
           <option value="108">MU USA Marketing Fare 1</option>
           <option value="109">MU USA Marketing Fare 2</option>
           <option value="110">US - KOREA</option>
           <option value="111">US -SEL</option>
           <option value="112">US-AU/NZ</option>
           <option value="113">US- ASIA Except CHINA</option>
           <option value="114">Area1/Asia -Asia/Area1</option>
           <option value="115">Europe/Middle East//Africa/India/Asia via Atlantic to USA</option>
           <option value="116">USA - INDIA </option>
           <option value="117">USA-United Kingdom</option>
           <option value="118">AA-JU 2</option>
           <option value="119">North Atlantic to BEY via FRA</option>
           <option value="120">North Atlantic to BEY via Europe</option>
           <option value="121">Joint ME & (LH) net fare </option>
           <option value="122">AC USA to Asia</option>
           <option value="123">Cuba to BEY via LON</option>
           <option value="124">Selected point in USA to BEY via LON</option>
           <option value="125">US - LAC</option>
           <option value="126">USA- JAPAN</option>
           <option value="127">Canada- Japan</option>
           <option value="137">BOS / MIA - CAS </option>
           <option value="136">JFK- All Egypt Air Net Work via CAI</option>
           <option value="135">JFK - CAI</option>
           <option value="134">Testing</option>
           <option value="133">WB - JAPAN -USA</option>
           <option value="132">USA- Europe  .Middle East. Africa. India .Asia</option>
       </select>
</div>
                    <div>
                        <label>Airline</label>
                      <input type="text" name="search" value="" id="id_search" placeholder="Search Airline" style="text-transform:uppercase;"  />
                        <select name="com_code[]" multiple="multiple" id="com_code" class="com_code" >
                                                       <option value="9W">
                                9W | Jet Airways                           </option>
                                                       <option value="9W">
                                9W | Jet Airways                           </option>
                                                       <option value="9W">
                                9W | Jet Airways                           </option>
                                                       <option value="AA">
                                AA | American Airlines                           </option>
                                                       <option value="AA">
                                AA | American Airlines                           </option>
                                                       <option value="AA">
                                AA | American Airlines                           </option>
                                                       <option value="AC">
                                AC | Air Canada                           </option>
                                                       <option value="AC">
                                AC | Air Canada                           </option>
                                                       <option value="AC">
                                AC | Air Canada                           </option>
                                                       <option value="AF">
                                AF | Air France                           </option>
                                                       <option value="AF">
                                AF | Air France                           </option>
                                                       <option value="AF">
                                AF | Air France                           </option>
                                                       <option value="AI">
                                AI | Nacil Air India                           </option>
                                                       <option value="AI">
                                AI | Nacil Air India                           </option>
                                                       <option value="AI">
                                AI | Nacil Air India                           </option>
                                                       <option value="AM">
                                AM | Aeromexico                           </option>
                                                       <option value="AM">
                                AM | Aeromexico                           </option>
                                                       <option value="AM">
                                AM | Aeromexico                           </option>
                                                       <option value="AT">
                                AT | Royal Air Maroc                           </option>
                                                       <option value="AT">
                                AT | Royal Air Maroc                           </option>
                                                       <option value="AT">
                                AT | Royal Air Maroc                           </option>
                                                       <option value="AV">
                                AV | Avianca                           </option>
                                                       <option value="AV">
                                AV | Avianca                           </option>
                                                       <option value="AY">
                                AY | Finnair                           </option>
                                                       <option value="AY">
                                AY | Finnair                           </option>
                                                       <option value="AY">
                                AY | Finnair                           </option>
                                                       <option value="AZ">
                                AZ | Alitalia                           </option>
                                                       <option value="AZ">
                                AZ | Alitalia                           </option>
                                                       <option value="AZ">
                                AZ | Alitalia                           </option>
                                                       <option value="BA">
                                BA | British Airways                           </option>
                                                       <option value="BA">
                                BA | British Airways                           </option>
                                                       <option value="BA">
                                BA | British Airways                           </option>
                                                       <option value="BR">
                                BR | Eva Air                           </option>
                                                       <option value="BR">
                                BR | Eva Air                           </option>
                                                       <option value="BR">
                                BR | Eva Air                           </option>
                                                       <option value="CI">
                                CI | China Airlines                           </option>
                                                       <option value="CI">
                                CI | China Airlines                           </option>
                                                       <option value="CI">
                                CI | China Airlines                           </option>
                                                       <option value="CX">
                                CX | Cathay Pacific                           </option>
                                                       <option value="CX">
                                CX | Cathay Pacific                           </option>
                                                       <option value="CX">
                                CX | Cathay Pacific                           </option>
                                                       <option value="CZ">
                                CZ | China Southern Airlines                           </option>
                                                       <option value="CZ">
                                CZ | China Southern Airlines                           </option>
                                                       <option value="CZ">
                                CZ | China Southern Airlines                           </option>
                                                       <option value="DE">
                                DE | Condor                           </option>
                                                       <option value="DE">
                                DE | Condor                           </option>
                                                       <option value="DE">
                                DE | Condor                           </option>
                                                       <option value="DL">
                                DL | Delta Air Lines                           </option>
                                                       <option value="DL">
                                DL | Delta Air Lines                           </option>
                                                       <option value="DL">
                                DL | Delta Air Lines                           </option>
                                                       <option value="DY">
                                DY | Norwegian Air                           </option>
                                                       <option value="DY">
                                DY | Norwegian Air                           </option>
                                                       <option value="DY">
                                DY | Norwegian Air                           </option>
                                                       <option value="EI">
                                EI | Aer Lingus                           </option>
                                                       <option value="EI">
                                EI | Aer Lingus                           </option>
                                                       <option value="EI">
                                EI | Aer Lingus                           </option>
                                                       <option value="EK">
                                EK | Emirates                           </option>
                                                       <option value="EK">
                                EK | Emirates                           </option>
                                                       <option value="EK">
                                EK | Emirates                           </option>
                                                       <option value="ET">
                                ET | Ethiopian Airlines                           </option>
                                                       <option value="ET">
                                ET | Ethiopian Airlines                           </option>
                                                       <option value="ET">
                                ET | Ethiopian Airlines                           </option>
                                                       <option value="EY">
                                EY | Etihad Airways                           </option>
                                                       <option value="EY">
                                EY | Etihad Airways                           </option>
                                                       <option value="EY">
                                EY | Etihad Airways                           </option>
                                                       <option value="FI">
                                FI | Icelandair                           </option>
                                                       <option value="FI">
                                FI | Icelandair                           </option>
                                                       <option value="FI">
                                FI | Icelandair                           </option>
                                                       <option value="FJ">
                                FJ | Fiji Airways                           </option>
                                                       <option value="FJ">
                                FJ | Fiji Airways                           </option>
                                                       <option value="FJ">
                                FJ | Fiji Airways                           </option>
                                                       <option value="GF">
                                GF | Gulf Air                           </option>
                                                       <option value="GF">
                                GF | Gulf Air                           </option>
                                                       <option value="GF">
                                GF | Gulf Air                           </option>
                                                       <option value="HU">
                                HU | Hainan Airlines                           </option>
                                                       <option value="HU">
                                HU | Hainan Airlines                           </option>
                                                       <option value="IB">
                                IB | Iberia                           </option>
                                                       <option value="IB">
                                IB | Iberia                           </option>
                                                       <option value="IB">
                                IB | Iberia                           </option>
                                                       <option value="IG">
                                IG | Air Italy                           </option>
                                                       <option value="IG">
                                IG | Air Italy                           </option>
                                                       <option value="IG">
                                IG | Air Italy                           </option>
                                                       <option value="IZ">
                                IZ | Arkia                           </option>
                                                       <option value="IZ">
                                IZ | Arkia                           </option>
                                                       <option value="IZ">
                                IZ | Arkia                           </option>
                                                       <option value="JL">
                                JL | Japan Airlines                           </option>
                                                       <option value="JL">
                                JL | Japan Airlines                           </option>
                                                       <option value="JL">
                                JL | Japan Airlines                           </option>
                                                       <option value="JU">
                                JU | Air Serbia                           </option>
                                                       <option value="JU">
                                JU | Air Serbia                           </option>
                                                       <option value="JU">
                                JU | Air Serbia                           </option>
                                                       <option value="KE">
                                KE | Korean Air                           </option>
                                                       <option value="KE">
                                KE | Korean Air                           </option>
                                                       <option value="KE">
                                KE | Korean Air                           </option>
                                                       <option value="KL">
                                KL | KLM                           </option>
                                                       <option value="KL">
                                KL | KLM                           </option>
                                                       <option value="KL">
                                KL | KLM                           </option>
                                                       <option value="KQ">
                                KQ | Kenya Airways                           </option>
                                                       <option value="KQ">
                                KQ | Kenya Airways                           </option>
                                                       <option value="KQ">
                                KQ | Kenya Airways                           </option>
                                                       <option value="KU">
                                KU | Kuwait Airways                           </option>
                                                       <option value="KU">
                                KU | Kuwait Airways                           </option>
                                                       <option value="KU">
                                KU | Kuwait Airways                           </option>
                                                       <option value="LH">
                                LH | Lufthansa                           </option>
                                                       <option value="LH">
                                LH | Lufthansa                           </option>
                                                       <option value="LH">
                                LH | Lufthansa                           </option>
                                                       <option value="LO">
                                LO | LOT Polish Airlines                           </option>
                                                       <option value="LO">
                                LO | LOT Polish Airlines                           </option>
                                                       <option value="LO">
                                LO | LOT Polish Airlines                           </option>
                                                       <option value="LQ">
                                LQ | Lanmei airlines                           </option>
                                                       <option value="LQ">
                                LQ | Lanmei airlines                           </option>
                                                       <option value="LQ">
                                LQ | Lanmei airlines                           </option>
                                                       <option value="LX">
                                LX | Swiss                           </option>
                                                       <option value="LX">
                                LX | Swiss                           </option>
                                                       <option value="LX">
                                LX | Swiss                           </option>
                                                       <option value="LY">
                                LY | El Al                           </option>
                                                       <option value="LY">
                                LY | El Al                           </option>
                                                       <option value="LY">
                                LY | El Al                           </option>
                                                       <option value="ME">
                                ME | Middle East Airlines                           </option>
                                                       <option value="ME">
                                ME | Middle East Airlines                           </option>
                                                       <option value="ME">
                                ME | Middle East Airlines                           </option>
                                                       <option value="MS">
                                MS | Egyptair                           </option>
                                                       <option value="MS">
                                MS | Egyptair                           </option>
                                                       <option value="MS">
                                MS | Egyptair                           </option>
                                                       <option value="MU">
                                MU | China Eastern Airlines                           </option>
                                                       <option value="MU">
                                MU | China Eastern Airlines                           </option>
                                                       <option value="MU">
                                MU | China Eastern Airlines                           </option>
                                                       <option value="NH">
                                NH | All Nippon Airways                           </option>
                                                       <option value="NH">
                                NH | All Nippon Airways                           </option>
                                                       <option value="NH">
                                NH | All Nippon Airways                           </option>
                                                       <option value="NX">
                                NX | Air Macau                           </option>
                                                       <option value="NX">
                                NX | Air Macau                           </option>
                                                       <option value="NX">
                                NX | Air Macau                           </option>
                                                       <option value="OS">
                                OS | Austrian                           </option>
                                                       <option value="OS">
                                OS | Austrian                           </option>
                                                       <option value="OS">
                                OS | Austrian                           </option>
                                                       <option value="OZ">
                                OZ | Asiana Airlines                           </option>
                                                       <option value="OZ">
                                OZ | Asiana Airlines                           </option>
                                                       <option value="OZ">
                                OZ | Asiana Airlines                           </option>
                                                       <option value="PK">
                                PK | Pakistan International Airlines                           </option>
                                                       <option value="PK">
                                PK | Pakistan International Airlines                           </option>
                                                       <option value="PR">
                                PR | Philippine Airlines                           </option>
                                                       <option value="PR">
                                PR | Philippine Airlines                           </option>
                                                       <option value="PR">
                                PR | Philippine Airlines                           </option>
                                                       <option value="PS">
                                PS | Ukraine Intl Airlines                           </option>
                                                       <option value="PS">
                                PS | Ukraine Intl Airlines                           </option>
                                                       <option value="PS">
                                PS | Ukraine Intl Airlines                           </option>
                                                       <option value="QF">
                                QF | Qantas Airways                           </option>
                                                       <option value="QF">
                                QF | Qantas Airways                           </option>
                                                       <option value="QF">
                                QF | Qantas Airways                           </option>
                                                       <option value="QR">
                                QR | Qatar Airways                           </option>
                                                       <option value="QR">
                                QR | Qatar Airways                           </option>
                                                       <option value="QR">
                                QR | Qatar Airways                           </option>
                                                       <option value="RJ">
                                RJ | Royal Jordanian                           </option>
                                                       <option value="RJ">
                                RJ | Royal Jordanian                           </option>
                                                       <option value="RJ">
                                RJ | Royal Jordanian                           </option>
                                                       <option value="SA">
                                SA | South African Airways                           </option>
                                                       <option value="SA">
                                SA | South African Airways                           </option>
                                                       <option value="SA">
                                SA | South African Airways                           </option>
                                                       <option value="SE">
                                SE | XL Airways France                           </option>
                                                       <option value="SE">
                                SE | XL Airways France                           </option>
                                                       <option value="SE">
                                SE | XL Airways France                           </option>
                                                       <option value="SK">
                                SK | Scandinavian Airlines                           </option>
                                                       <option value="SK">
                                SK | Scandinavian Airlines                           </option>
                                                       <option value="SK">
                                SK | Scandinavian Airlines                           </option>
                                                       <option value="SN">
                                SN | Brussels Airlines                           </option>
                                                       <option value="SN">
                                SN | Brussels Airlines                           </option>
                                                       <option value="SN">
                                SN | Brussels Airlines                           </option>
                                                       <option value="SQ">
                                SQ | Singapore Airlines                           </option>
                                                       <option value="SQ">
                                SQ | Singapore Airlines                           </option>
                                                       <option value="SQ">
                                SQ | Singapore Airlines                           </option>
                                                       <option value="SV">
                                SV | Saudi Arabian Airlines                           </option>
                                                       <option value="SV">
                                SV | Saudi Arabian Airlines                           </option>
                                                       <option value="SV">
                                SV | Saudi Arabian Airlines                           </option>
                                                       <option value="TB">
                                TB | TUIfly                           </option>
                                                       <option value="TB">
                                TB | TUIfly                           </option>
                                                       <option value="TB">
                                TB | TUIfly                           </option>
                                                       <option value="TK">
                                TK | Turkish Airlines                           </option>
                                                       <option value="TK">
                                TK | Turkish Airlines                           </option>
                                                       <option value="TK">
                                TK | Turkish Airlines                           </option>
                                                       <option value="TN">
                                TN | Air Tahiti Nui                           </option>
                                                       <option value="TN">
                                TN | Air Tahiti Nui                           </option>
                                                       <option value="TN">
                                TN | Air Tahiti Nui                           </option>
                                                       <option value="TP">
                                TP | TAP Portugal                           </option>
                                                       <option value="TP">
                                TP | TAP Portugal                           </option>
                                                       <option value="TP">
                                TP | TAP Portugal                           </option>
                                                       <option value="UA">
                                UA | United Airlines                           </option>
                                                       <option value="UA">
                                UA | United Airlines                           </option>
                                                       <option value="UA">
                                UA | United Airlines                           </option>
                                                       <option value="VA">
                                VA | V Australia                           </option>
                                                       <option value="VA">
                                VA | V Australia                           </option>
                                                       <option value="VA">
                                VA | V Australia                           </option>
                                                       <option value="VR">
                                VR | Tacv Cabo Verde Airlines                           </option>
                                                       <option value="VR">
                                VR | Tacv Cabo Verde Airlines                           </option>
                                                       <option value="VS">
                                VS | Virgin Atlantic                           </option>
                                                       <option value="VS">
                                VS | Virgin Atlantic                           </option>
                                                       <option value="VS">
                                VS | Virgin Atlantic                           </option>
                                                       <option value="WY">
                                WY | Oman Air                           </option>
                                                       <option value="WY">
                                WY | Oman Air                           </option>
                                                       <option value="YM">
                                YM | Montenegro Airlines                           </option>
                                                       <option value="YM">
                                YM | Montenegro Airlines                           </option>
                                                       <option value="YM">
                                YM | Montenegro Airlines                           </option>
                                                   </select>
                    
                    </div>
                <br>
          <div>
            <label>Ticketing Start</label>
            <input name="terms_start"  class="terms_start" type="date">
          </div>
          <div style="width:100%; margin-bottom:8px;">
          <label>Ticketing End</label>
          <input name="terms_end" class="terms_end" type="date">
        </div>
                    <div> 
            <label style="width:100%; margin-bottom:8px;">Terms & Conditiaons</label>
                        <textarea id="details" name="terms_details" class="tinymce" rows="1104" cols="5550">
                        </textarea>
                    </div>
                </div>
            </div>
            

            <div align="center">
    <input style="width:20%" class="btn btn-primary btn-xs" class="btn btn-primary btn-xs" type="submit" name="save">
              
    </div>
 <!-------------------------------------------------------->
    <br/>
   </div>
  </div>
</form>
</body>
<script>
$(document).ready(function(){
 var count = 1;
 $('#add').click(function(){

  count = count + 1;
  var html_code = "<tr id='row"+count+"'>";
   html_code += "<td contenteditable='true' class='Origin'></td>";
   html_code += "<td contenteditable='true' class='Destination'></td>";
   html_code += "<td contenteditable='true' class='Booking_Class'></td>";
   html_code += "<td contenteditable='true' class='Season' ></td>";
   html_code += "<td contenteditable='true' class='Ticket_Designator' ></td>";
   html_code += "<td contenteditable='true' class='Tour_Code' ></td>";
   html_code += "<td contenteditable='true' class='Clients' ></td>";
   html_code += "<td contenteditable='true' class='ATS' ></td>";
   html_code += "<td contenteditable='true' class='Remarks' ></td>";
   html_code += "<td><button type='button' name='remove' data-row='row"+count+"' class='btn btn-danger btn-xs remove'>-</button></td>";   
   html_code += "</tr>";  
   $('#crud_table').append(html_code);
 });
 
 $(document).on('click', '.remove', function(){
  var delete_row = $(this).data("row");
  $('#' + delete_row).remove();
 });

 $('#save').click(function(){
  var Origin = [];
  var Destination = [];
  var BookingClass = [];
  var Season = [];
  var TicketDesignator = [];
  var TourCode = [];
  var Clients = [];
  var ATS = [];
  var Remarks = [];
  var terms_no=$('.terms_no').val();
  var terms_name=$('.terms_name').val();
  var com_region=$('.com_region').val(); 
  var com_code =$('.com_code').val();  
  var terms_start=$('.terms_start').val();
  var terms_end=$('.terms_end').val();

  var terms_details=CKEDITOR.instances.details.getData();
 
  $('.Origin').each(function(){
    Origin.push($(this).text());
  });
  $('.Destination').each(function(){
    Destination.push($(this).text());
  });
  $('.Booking_Class').each(function(){
    BookingClass.push($(this).text());
  });
  $('.Season').each(function(){
    Season.push($(this).text());
  });
  $('.Ticket_Designator').each(function(){
    TicketDesignator.push($(this).text());
  });
  $('.Tour_Code').each(function(){
    TourCode.push($(this).text());
  });
  $('.Clients').each(function(){
    Clients.push($(this).text());
  });
  $('.ATS').each(function(){
    ATS.push($(this).text());
  });
  $('.Remarks').each(function(){
    Remarks.push($(this).text());
  });
 
 

  $.ajax({
   url:"insert_commission.php",
   method:"POST",
   data:{Origin:Origin, Destination:Destination, BookingClass:BookingClass, Season:Season,TicketDesignator:TicketDesignator,TourCode:TourCode,Clients:Clients,ATS:ATS,Remarks:Remarks,
    terms_no:terms_no,terms_name:terms_name,com_region:com_region,com_code:com_code,terms_start:terms_start,terms_end:terms_end,terms_details:terms_details},
   success:function(data){
    alert(data);
   
    $("td[contentEditable='true']").text("");
    for(var i=2; i<= count; i++)
    {
     $('tr#'+i+'').remove();
    }

   }
  });
 });

});
$('#com_code').multiSelect({
    keepOrder: true});
</script>
<script type="text/javascript">
	CKEDITOR.replace('details');
</script>
{{-- <script>
  ClassicEditor
      .create( document.querySelector( '#details' ) )
      .catch( error => {
          console.error( error );
      } );
</script> --}}
<script>
	ClassicEditor
		.create( document.querySelector( '#details' ) ,
    
    )
		// .then( editor => {
		// 	window.editor = editor;
		// } )
		.catch( error => {
			console.error( 'There was a problem initializing the editor.', error );
		} );
   
</script>
