<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>All Athlete Data</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">



  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=fire">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>

<body>
    <div class="container">
<center><h4>OVERALL DATA</h4></center>
        <table class="table">

            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">DOB</th>
                <th scope="col">Gender</th>
                <th scope="col">Weight</th>
                <th scope="col">Category</th>
                <th scope="col">Qualification</th>
                <th scope="col">Mobile</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">State</th>
                <th scope="col">Pincode</th>
 </tr>

            </thead>
            <tbody class="table-group-divider">
@foreach ($ath as $a)


              <tr>

                <td>{{$a->name}}</td>
                <td>{{$a->dob}}</td>
                <td>{{$a->gender}}</td>
                <td>{{$a->weight}}</td>
                <td>{{$a->category}}</td>
                <td>{{$a->qualification}}</td>
                <td>{{$a->mobile_number}}</td>
                <td>{{$a->email}}</td>
                <td>{{$a->address}}</td>
                <td>{{$a->state}}</td>
                <td>{{$a->pincode}}</td>

              </tr>
              @endforeach

            </tbody>
          </table>
    </div>
<br>
<br>
    <div class="container">
        <center><h4>MALE 45-50</h4></center>
          <table class="table">

            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">DOB</th>
                <th scope="col">Gender</th>
                <th scope="col">Weight</th>
                <th scope="col">Category</th>
                <th scope="col">Qualification</th>
                <th scope="col">Mobile</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">State</th>
                <th scope="col">Pincode</th>
 </tr>

            </thead>
            <tbody class="table-group-divider">

           @foreach($m45 as $aa)


              <tr>

                <td>{{$aa->name}}</td>
                <td>{{$aa->dob}}</td>
                <td>{{$aa->gender}}</td>
                <td>{{$aa->weight}}</td>
                <td>{{$aa->category}}</td>
                <td>{{$aa->qualification}}</td>
                <td>{{$aa->mobile_number}}</td>
                <td>{{$aa->email}}</td>
                <td>{{$aa->address}}</td>
                <td>{{$aa->state}}</td>
                <td>{{$aa->pincode}}</td>

              </tr>
              @endforeach

            </tbody>
          </table>
        </div>
        <br>
        <br>

        <div class="container">
            <center><h4>MALE 51-55</h4></center>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">DOB</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Weight</th>
                  <th scope="col">Category</th>
                  <th scope="col">Qualification</th>
                  <th scope="col">Mobile</th>
                  <th scope="col">Email</th>
                  <th scope="col">Address</th>
                  <th scope="col">State</th>
                  <th scope="col">Pincode</th>
   </tr>

              </thead>
              <tbody class="table-group-divider">

             @foreach($m51 as $aaa)


                <tr>

                  <td>{{$aaa->name}}</td>
                  <td>{{$aaa->dob}}</td>
                  <td>{{$aaa->gender}}</td>
                  <td>{{$aaa->weight}}</td>
                  <td>{{$aaa->category}}</td>
                  <td>{{$aaa->qualification}}</td>
                  <td>{{$aaa->mobile_number}}</td>
                  <td>{{$aaa->email}}</td>
                  <td>{{$aaa->address}}</td>
                  <td>{{$aaa->state}}</td>
                  <td>{{$aaa->pincode}}</td>

                </tr>
                @endforeach

              </tbody>
            </table>
          </div>
          <br>
          <br>

          <div class="container">
            <center><h4>MALE 56-60</h4></center>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">DOB</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Weight</th>
                  <th scope="col">Category</th>
                  <th scope="col">Qualification</th>
                  <th scope="col">Mobile</th>
                  <th scope="col">Email</th>
                  <th scope="col">Address</th>
                  <th scope="col">State</th>
                  <th scope="col">Pincode</th>
   </tr>

              </thead>
              <tbody class="table-group-divider">

             @foreach($m56 as $aaaa)


                <tr>

                  <td>{{$aaaa->name}}</td>
                  <td>{{$aaaa->dob}}</td>
                  <td>{{$aaaa->gender}}</td>
                  <td>{{$aaaa->weight}}</td>
                  <td>{{$aaaa->category}}</td>
                  <td>{{$aaaa->qualification}}</td>
                  <td>{{$aaaa->mobile_number}}</td>
                  <td>{{$aaaa->email}}</td>
                  <td>{{$aaaa->address}}</td>
                  <td>{{$aaaa->state}}</td>
                  <td>{{$aaaa->pincode}}</td>

                </tr>
                @endforeach

              </tbody>
            </table>
          </div>
          <br>
          <br>

          <div class="container">
            <center><h4>MALE 61-65</h4></center>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">DOB</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Weight</th>
                  <th scope="col">Category</th>
                  <th scope="col">Qualification</th>
                  <th scope="col">Mobile</th>
                  <th scope="col">Email</th>
                  <th scope="col">Address</th>
                  <th scope="col">State</th>
                  <th scope="col">Pincode</th>
   </tr>

              </thead>
              <tbody class="table-group-divider">

             @foreach($m61 as $b)


                <tr>

                  <td>{{$b->name}}</td>
                  <td>{{$b->dob}}</td>
                  <td>{{$b->gender}}</td>
                  <td>{{$b->weight}}</td>
                  <td>{{$b->category}}</td>
                  <td>{{$b->qualification}}</td>
                  <td>{{$b->mobile_number}}</td>
                  <td>{{$b->email}}</td>
                  <td>{{$b->address}}</td>
                  <td>{{$b->state}}</td>
                  <td>{{$b->pincode}}</td>

                </tr>
                @endforeach

              </tbody>
            </table>
          </div>
          <br>
          <br>

          <div class="container">
            <center><h4>MALE 66-70</h4></center>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">DOB</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Weight</th>
                  <th scope="col">Category</th>
                  <th scope="col">Qualification</th>
                  <th scope="col">Mobile</th>
                  <th scope="col">Email</th>
                  <th scope="col">Address</th>
                  <th scope="col">State</th>
                  <th scope="col">Pincode</th>
   </tr>

              </thead>
              <tbody class="table-group-divider">

             @foreach($m66 as $c)


                <tr>

                  <td>{{$c->name}}</td>
                  <td>{{$c->dob}}</td>
                  <td>{{$c->gender}}</td>
                  <td>{{$c->weight}}</td>
                  <td>{{$c->category}}</td>
                  <td>{{$c->qualification}}</td>
                  <td>{{$c->mobile_number}}</td>
                  <td>{{$c->email}}</td>
                  <td>{{$c->address}}</td>
                  <td>{{$c->state}}</td>
                  <td>{{$c->pincode}}</td>

                </tr>
                @endforeach

              </tbody>
            </table>
          </div>
          <br>
          <br>

          <div class="container">
            <center><h4>FEMALE 45-50</h4></center>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">DOB</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Weight</th>
                  <th scope="col">Category</th>
                  <th scope="col">Qualification</th>
                  <th scope="col">Mobile</th>
                  <th scope="col">Email</th>
                  <th scope="col">Address</th>
                  <th scope="col">State</th>
                  <th scope="col">Pincode</th>
   </tr>

              </thead>
              <tbody class="table-group-divider">

             @foreach($f45 as $d)


                <tr>

                  <td>{{$d->name}}</td>
                  <td>{{$d->dob}}</td>
                  <td>{{$d->gender}}</td>
                  <td>{{$d->weight}}</td>
                  <td>{{$d->category}}</td>
                  <td>{{$d->qualification}}</td>
                  <td>{{$d->mobile_number}}</td>
                  <td>{{$d->email}}</td>
                  <td>{{$d->address}}</td>
                  <td>{{$d->state}}</td>
                  <td>{{$d->pincode}}</td>

                </tr>
                @endforeach

              </tbody>
            </table>
          </div>
          <br>
          <br>

          <div class="container">
            <center><h4>FEMALE 51-55</h4></center>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">DOB</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Weight</th>
                  <th scope="col">Category</th>
                  <th scope="col">Qualification</th>
                  <th scope="col">Mobile</th>
                  <th scope="col">Email</th>
                  <th scope="col">Address</th>
                  <th scope="col">State</th>
                  <th scope="col">Pincode</th>
   </tr>

              </thead>
              <tbody class="table-group-divider">

             @foreach($f51 as $e)


                <tr>

                  <td>{{$e->name}}</td>
                  <td>{{$e->dob}}</td>
                  <td>{{$e->gender}}</td>
                  <td>{{$e->weight}}</td>
                  <td>{{$e->category}}</td>
                  <td>{{$e->qualification}}</td>
                  <td>{{$e->mobile_number}}</td>
                  <td>{{$e->email}}</td>
                  <td>{{$e->address}}</td>
                  <td>{{$e->state}}</td>
                  <td>{{$e->pincode}}</td>

                </tr>
                @endforeach

              </tbody>
            </table>
          </div>
          <br>
          <br>

          <div class="container">
            <center><h4>FEMALE 56-60</h4></center>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">DOB</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Weight</th>
                  <th scope="col">Category</th>
                  <th scope="col">Qualification</th>
                  <th scope="col">Mobile</th>
                  <th scope="col">Email</th>
                  <th scope="col">Address</th>
                  <th scope="col">State</th>
                  <th scope="col">Pincode</th>
   </tr>

              </thead>
              <tbody class="table-group-divider">

             @foreach($f56 as $f)


                <tr>

                  <td>{{$f->name}}</td>
                  <td>{{$f->dob}}</td>
                  <td>{{$f->gender}}</td>
                  <td>{{$f->weight}}</td>
                  <td>{{$f->category}}</td>
                  <td>{{$f->qualification}}</td>
                  <td>{{$f->mobile_number}}</td>
                  <td>{{$f->email}}</td>
                  <td>{{$f->address}}</td>
                  <td>{{$f->state}}</td>
                  <td>{{$f->pincode}}</td>

                </tr>
                @endforeach

              </tbody>
            </table>
          </div>
          <br>
          <br>

          <div class="container">
            <center><h4>FEMALE 61-65</h4></center>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">DOB</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Weight</th>
                  <th scope="col">Category</th>
                  <th scope="col">Qualification</th>
                  <th scope="col">Mobile</th>
                  <th scope="col">Email</th>
                  <th scope="col">Address</th>
                  <th scope="col">State</th>
                  <th scope="col">Pincode</th>
   </tr>

              </thead>
              <tbody class="table-group-divider">

             @foreach($f61 as $g)


                <tr>

                  <td>{{$g->name}}</td>
                  <td>{{$g->dob}}</td>
                  <td>{{$g->gender}}</td>
                  <td>{{$g->weight}}</td>
                  <td>{{$g->category}}</td>
                  <td>{{$g->qualification}}</td>
                  <td>{{$g->mobile_number}}</td>
                  <td>{{$g->email}}</td>
                  <td>{{$g->address}}</td>
                  <td>{{$g->state}}</td>
                  <td>{{$g->pincode}}</td>

                </tr>
                @endforeach

              </tbody>
            </table>
          </div>
          <br>
          <br>

          <div class="container">
            <center><h4>FEMALE 66-70</h4></center>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">DOB</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Weight</th>
                  <th scope="col">Category</th>
                  <th scope="col">Qualification</th>
                  <th scope="col">Mobile</th>
                  <th scope="col">Email</th>
                  <th scope="col">Address</th>
                  <th scope="col">State</th>
                  <th scope="col">Pincode</th>
   </tr>

              </thead>
              <tbody class="table-group-divider">

             @foreach($f66 as $h)


                <tr>

                  <td>{{$h->name}}</td>
                  <td>{{$h->dob}}</td>
                  <td>{{$h->gender}}</td>
                  <td>{{$h->weight}}</td>
                  <td>{{$h->category}}</td>
                  <td>{{$h->qualification}}</td>
                  <td>{{$h->mobile_number}}</td>
                  <td>{{$h->email}}</td>
                  <td>{{$h->address}}</td>
                  <td>{{$h->state}}</td>
                  <td>{{$h->pincode}}</td>

                </tr>
                @endforeach

              </tbody>
            </table>
          </div>
          <br>
          <br>

          <div class="container">
            <center><h4>OTHERS 45-50</h4></center>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">DOB</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Weight</th>
                  <th scope="col">Category</th>
                  <th scope="col">Qualification</th>
                  <th scope="col">Mobile</th>
                  <th scope="col">Email</th>
                  <th scope="col">Address</th>
                  <th scope="col">State</th>
                  <th scope="col">Pincode</th>
   </tr>

              </thead>
              <tbody class="table-group-divider">

             @foreach($o45 as $v)


                <tr>

                  <td>{{$v->name}}</td>
                  <td>{{$v->dob}}</td>
                  <td>{{$v->gender}}</td>
                  <td>{{$v->weight}}</td>
                  <td>{{$v->category}}</td>
                  <td>{{$v->qualification}}</td>
                  <td>{{$v->mobile_number}}</td>
                  <td>{{$v->email}}</td>
                  <td>{{$v->address}}</td>
                  <td>{{$v->state}}</td>
                  <td>{{$v->pincode}}</td>

                </tr>
                @endforeach

              </tbody>
            </table>
          </div>
          <br>
          <br>

          <div class="container">
            <center><h4>OTHERS 51-55</h4></center>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">DOB</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Weight</th>
                  <th scope="col">Category</th>
                  <th scope="col">Qualification</th>
                  <th scope="col">Mobile</th>
                  <th scope="col">Email</th>
                  <th scope="col">Address</th>
                  <th scope="col">State</th>
                  <th scope="col">Pincode</th>
   </tr>

              </thead>
              <tbody class="table-group-divider">

             @foreach($o51 as $w)


                <tr>

                  <td>{{$w->name}}</td>
                  <td>{{$w->dob}}</td>
                  <td>{{$w->gender}}</td>
                  <td>{{$w->weight}}</td>
                  <td>{{$w->category}}</td>
                  <td>{{$w->qualification}}</td>
                  <td>{{$w->mobile_number}}</td>
                  <td>{{$w->email}}</td>
                  <td>{{$w->address}}</td>
                  <td>{{$w->state}}</td>
                  <td>{{$w->pincode}}</td>

                </tr>
                @endforeach

              </tbody>
            </table>
          </div>
          <br>
          <br>

          <div class="container">
            <center><h4>OTHERS 56-60</h4></center>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">DOB</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Weight</th>
                  <th scope="col">Category</th>
                  <th scope="col">Qualification</th>
                  <th scope="col">Mobile</th>
                  <th scope="col">Email</th>
                  <th scope="col">Address</th>
                  <th scope="col">State</th>
                  <th scope="col">Pincode</th>
   </tr>

              </thead>
              <tbody class="table-group-divider">

             @foreach($o56 as $y)


                <tr>

                  <td>{{$y->name}}</td>
                  <td>{{$y->dob}}</td>
                  <td>{{$y->gender}}</td>
                  <td>{{$y->weight}}</td>
                  <td>{{$y->category}}</td>
                  <td>{{$y->qualification}}</td>
                  <td>{{$y->mobile_number}}</td>
                  <td>{{$y->email}}</td>
                  <td>{{$y->address}}</td>
                  <td>{{$y->state}}</td>
                  <td>{{$y->pincode}}</td>

                </tr>
                @endforeach

              </tbody>
            </table>
          </div>
          <br>
          <br>

          <div class="container">
            <center><h4>OTHERS 61-65</h4></center>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">DOB</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Weight</th>
                  <th scope="col">Category</th>
                  <th scope="col">Qualification</th>
                  <th scope="col">Mobile</th>
                  <th scope="col">Email</th>
                  <th scope="col">Address</th>
                  <th scope="col">State</th>
                  <th scope="col">Pincode</th>
   </tr>

              </thead>
              <tbody class="table-group-divider">

             @foreach($o61 as $u)


                <tr>

                  <td>{{$u->name}}</td>
                  <td>{{$u->dob}}</td>
                  <td>{{$u->gender}}</td>
                  <td>{{$u->weight}}</td>
                  <td>{{$u->category}}</td>
                  <td>{{$u->qualification}}</td>
                  <td>{{$u->mobile_number}}</td>
                  <td>{{$u->email}}</td>
                  <td>{{$u->address}}</td>
                  <td>{{$u->state}}</td>
                  <td>{{$u->pincode}}</td>

                </tr>
                @endforeach

              </tbody>
            </table>
          </div>
          <br>
          <br>

          <div class="container">
            <center><h4>OTHERS 66-70</h4></center>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">DOB</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Weight</th>
                  <th scope="col">Category</th>
                  <th scope="col">Qualification</th>
                  <th scope="col">Mobile</th>
                  <th scope="col">Email</th>
                  <th scope="col">Address</th>
                  <th scope="col">State</th>
                  <th scope="col">Pincode</th>
   </tr>

              </thead>
              <tbody class="table-group-divider">

             @foreach($o66 as $t)


                <tr>

                  <td>{{$t->name}}</td>
                  <td>{{$t->dob}}</td>
                  <td>{{$t->gender}}</td>
                  <td>{{$t->weight}}</td>
                  <td>{{$t->category}}</td>
                  <td>{{$t->qualification}}</td>
                  <td>{{$t->mobile_number}}</td>
                  <td>{{$t->email}}</td>
                  <td>{{$t->address}}</td>
                  <td>{{$t->state}}</td>
                  <td>{{$t->pincode}}</td>

                </tr>
                @endforeach

              </tbody>
            </table>
          </div>
          <br>
          <br>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>


