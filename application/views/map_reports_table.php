
  <style>

   #map-table-jana{
        margin: 20px 0px 60px;
        background: #fff;
        overflow: hidden;
    }

    #reportable{
        overflow: auto;
        margin: 0.5em;
    }
    .responstable {
  margin: 1em 0em;
  width: 100%;
  overflow: hidden;
  background: #FFF;
  color: #000;
  border-radius: 0px;
  border: 1px solid #002052;
  font-size: 16px;
}
.responstable tr {
  border: 1px solid #D9E4E6;
}
.responstable tr:nth-child(odd) {
  background-color: #EAF3F3;
}
.responstable th {
  display: none;
  border: 1px solid #FFF;
  background-color: #7696c7;
  color: #FFF;
  padding: 1em;
}
.responstable th:first-child {
  display: table-cell;
  text-align: center;
}
.responstable th:nth-child(2) {
  display: table-cell;
}
.responstable th:nth-child(2) span {
  display: none;
}
.responstable th:nth-child(2):after {
  content: attr(data-th);
}
@media (min-width: 480px) {
  .responstable th:nth-child(2) span {
    display: block;
}
.responstable th:nth-child(2):after {
    display: none;
}
}
.responstable td {
  display: block;
  word-wrap: break-word;
  max-width: 7em;
}
.responstable td:first-child {
  display: table-cell;
  text-align: center;
  border-right: 1px solid #D9E4E6;
}
@media (min-width: 480px) {
  .responstable td {
    border: 1px solid #D9E4E6;
}
}
.responstable th, .responstable td {
  text-align: left;
  margin: .5em 1em;
}
@media (min-width: 480px) {
  .responstable th, .responstable td {
    display: table-cell;
    padding: 0.3em;
}
}
#map-table-jana .text-center h3{

}

#map-table-jana .report-down{
  padding: 25px;
  border-bottom: 1px solid #e7e7e7;
}

#map-table-jana .repo_filter{
  margin: 30px auto 15px;
}

table.responstable {
    overflow-x: scroll;
}
</style>


<div class="container">
<div id="map-table-jana">
<form  method="POST" action="ReportController/date_test">
  <div class="row">
    <div class="col-md-12">
      <div class="report-down">
            <div class="text-center"><h3>Total Reports</h3></div>
            <div class="col-md-3 pull-right">
              <ul class="list-inline">
                <li class="list-inline-item"><i class="fa fa-cloud-download"></i> Download :</li>
                <li class="list-inline-item"><a href="#" title="pdf"><i class="fa fa-file-pdf-o"></i></a></li>
                <li class="list-inline-item"><a href="#" title="excel"><i class="fa fa-file-excel-o"></i></a></li>
                <li class="list-inline-item"><a href="#" title="image"><i class="fa fa-file-image-o"></i></a></li>
                <li class="list-inline-item"><a href="#" title="word"><i class="fa fa-file-word-o"></i></a></li>
              </ul>
            </div>
      </div>
  </div>

    <div class="col-md-12">
    <div class="container">
    <div class="row repo_filter">
       <div class="col-md-2">Source
          <select class="custom-select multiselect-icon">
                  <option value="0" selected disabled>Select an option</option>
                  <option value="2" >Moha</option>
                  <option value="1" >Disinventar</option>
          </select>
        </div>

        <div class="col-md-2">Incident Type
          <select class="custom-select multiselect-icon">
                  <option value="0" selected disabled>Select an incident</option>
                  <option value="39">Flash Flood</option>
                  <option value="38">Leak</option>
                  <option value="37">Sedimentation</option>
                  <option value="36">Accident</option>
                  <option value="35">Biological</option>
                  <option value="34">Frost</option>
                  <option value="33">Pollution</option>
                  <option value="32">Famine</option>
                  <option value="31">Panic</option>
                  <option value="30">Explosion</option>
                  <option value="29">Drought</option>
                  <option value="28">Strong Wind</option>
                  <option value="27">Forest Fire</option>
                  <option value="26">Snow Storm</option>
                  <option value="25">Heat Wave</option>
                  <option value="24">Plague</option>
                  <option value="23">Hail Storm</option>
                  <option value="22">Structure Collapse</option>
                  <option value="21">Tuin Chudera</option>
                  <option value="20">Bridge Collapse</option>
                  <option value="19">Air Crash</option>
                  <option value="18">Avalanche</option>
                  <option value="17">Cold Wave</option>
                  <option value="16">Boat Capsize</option>
                  <option value="15">High Altitude</option>
                  <option value="14">Heavy Rainfall</option>
                  <option value="13">Drowning</option>
                  <option value="12">Wind storm</option>
                  <option value="11">Hailstone</option>
                  <option value="10">Epidemic</option>
                  <option value="9">Other</option>
                  <option value="8">storm</option>
                  <option value="7">Bus accident</option>
                  <option value="6">Lightning</option>
                  <option value="5">Thunderbolt</option>
                  <option value="4">Fire</option>
                  <option value="3">Landslide</option>
                  <option value="2">Flood</option>
                  <option value="1">Earthquake</option>
              </select>
        </div>

        <div class="col-md-2">District
            <select class="custom-select multiselect-icon">
                      <option value="0" selected disabled>Select a district</option>
                      <option value="1">Taplejung</option>
                      <option value="2">Panchthar</option>
                      <option value="3">Ilaam</option>
                      <option value="4">Jhapa</option>
                      <option value="5">Morang</option>
                      <option value="6">Sunsari</option>
                      <option value="7">Dhankuta</option>
                      <option value="8">Terhathum</option>
                      <option value="9">Bhojpur</option>
                      <option value="10">Shankhuwasabha</option>
                      <option value="11">Solukhumbu</option>
                      <option value="12">Khotang</option>
                      <option value="13">Okhaldhunga</option>
                      <option value="14">Udayapur</option>
                      <option value="15">Siraha</option>
                      <option value="16">Saptari</option>
                      <option value="17">Dhanusha</option>
                      <option value="18">Mahottari</option>
                      <option value="19">Sarlahi</option>
                      <option value="20">Sindhuli</option>
                      <option value="21">Ramechhap</option>
                      <option value="22">Dolakha</option>
                      <option value="23">RASUWA</option>
                      <option value="24">Sindhupalchowk</option>
                      <option value="25">Nuwakot</option>
                      <option value="26">Dhading</option>
                      <option value="27">Kathmandu</option>
                      <option value="28">Lalitpur</option>
                      <option value="29">Bhaktapur</option>
                      <option value="30">Kavrepalanchowk</option>
                      <option value="31">Makawanpur</option>
                      <option value="32">Rautahat</option>
                      <option value="33">Bara</option>
                      <option value="34">Parsa</option>
                      <option value="35">Chitawan</option>
                      <option value="36">Nawalparasi</option>
                      <option value="37">Rupandehi</option>
                      <option value="38">Kapilbastu</option>
                      <option value="39">Palpa</option>
                      <option value="40">Arghakhanchi</option>
                      <option value="41">Gulmi</option>
                      <option value="42">Shyanja</option>
                      <option value="43">Tanahu</option>
                      <option value="44">Gorkha</option>
                      <option value="45">Lamjung</option>
                      <option value="46">Kaski</option>
                      <option value="47">Manang</option>
                      <option value="48">Mustang</option>
                      <option value="49">Myagdi</option>
                      <option value="50">Baglung</option>
                      <option value="51">Parbat</option>
                      <option value="52">Dang</option>
                      <option value="53">Pyuthan</option>
                      <option value="54">Rolpa</option>
                      <option value="55">Salyan</option>
                      <option value="56">Rukum</option>
                      <option value="57">Dolpa</option>
                      <option value="58">Mugu</option>
                      <option value="59">Humla</option>
                      <option value="60">Jumla</option>
                      <option value="61">Kalikot</option>
                      <option value="62">Jajarkot</option>
                      <option value="63">Dailekh</option>
                      <option value="64">Surkhet</option>
                      <option value="65">Bardiya</option>
                      <option value="66">Banke</option>
                      <option value="67">Kailali</option>
                      <option value="68">Doti</option>
                      <option value="69">Achhaam</option>
                      <option value="70">Bajura</option>
                      <option value="71">Bajhang</option>
                      <option value="72">Darchula</option>
                      <option value="73">Baitadi</option>
                      <option value="74">Dadeldhura</option>
                      <option value="75">Kanchanpur</option>
                      <option value="76">None</option>
            </select>
        </div>

        <div class="col-md-2">Ward
          <select class="custom-select multiselect-icon">
                  <option value="0" selected disabled>Select ward</option>
                  <option value="10" >ward no1 </option>
                  <option value="9" >ward no1 </option>
                  <option value="8" >ward no1 </option>
                  <option value="7" >ward no1 </option>
                  <option value="6" >ward no1 </option>
                  <option value="5" >ward no1 </option>
                  <option value="4" >ward no1 </option>
                  <option value="3" >ward no1 </option>
                  <option value="2" >ward no1 </option>
                  <option value="1" >ward no1 </option>          1
          </select>
        </div>

        <div class="col-md-2">Date(From)
          <div class="form-group" style="margin-bottom: 0;">
                  <input class="form-control" type="date" name="from" id="datepicker1" placeholder="To">
          </div>
        </div>
        <div class="col-md-2">Date(To)
          <div class="form-group" style="margin-bottom: 0;">
                  <input class="form-control" type="date" name="to" id="datepicker2" placeholder="To">

          </div>
        </div>

    </div>
  </div>
</div>
  </div>
  <button type="submit" name="submit" class="btn btn-info">Submit</button>
  </form>
<div class="row" id="reportable">
 <!-- responsive table for displaying contact directory -->
 <table class="responstable">
  <tr>
    <?php foreach($data[0] as $key => $value){


                  ?>
      <th>

        <?php

        $cleanname = explode("_", $key);
        foreach ($cleanname as $r) {
          echo ucfirst($r)." ";
                        }?>

    </th>
    <?php  } ?>


  </tr>
  <?php foreach ($data as  $v) {
    // code...
 ?>
  <tr>
      <?php foreach($v as $key => $value) { ?>
    <td><?php echo $value;?></td>
  <?php } ?>
  </tr>

<?php  } ?>

    <td colspan="5">Total</td>
    <td>4639</td>
    <td>5463</td>
    <td>2</td>
    <td>45112</td>
    <td>3218</td>
    <td>6990068</td>
    <td>28546265613</td>
    <td>86056</td>
    <td>2689</td>
    <td>233778</td>
    <td>2221502</td>
    <td>553837</td>
    <td>4</td>
    <td>0</td>
    <td>0</td>
    <td colspan="3">&nbsp;</td>
  </tr>

</table>

<div class="row">
  <div class="col-md-offset-12 text-center">
    <nav aria-label="Page navigation example" class="">
      <ul class="pagination justify-content-center">
        <li class="page-item disabled">
          <a class="page-link" href="#" tabindex="-1">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#">Next</a>
        </li>
      </ul>
    </nav>
  </div>
</div>

</div>
</div>
</div>
</div>
