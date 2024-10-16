@extends($activeTemplate.'layouts.master')
@section('content')
    
     <section class="cart-page">
    <div class="container">
      <div class="border-box">
        <div class="box-title">
           <div class="col-md-12">
             <p><strong></strong></p>
           </div>
        
<div class="col-md-12">
         @if($message = Session::get('success'))
  <div class="alert alert-success">
    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
    <span aria-hidden="true">&times;</span></button>
    <strong>Well!: </strong> {{$message}}
  </div>
  @endif

 @if($message = Session::get('info'))
  <div class="alert alert-warning">
    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
    <span aria-hidden="true">&times;</span></button>
    <strong>Ops!: </strong> {{$message}}
  </div>
  @endif   

 @if($message = Session::get('error'))
  <div class="alert alert-danger">
    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
    <span aria-hidden="true">&times;</span></button>
    <strong>Sorry!: </strong> {{$message}}
  </div>
  @endif
</div>
</div>



        <p></p>
        <em>Booking Costs Summary</em>
          <em><b>(Please finish Payment to complete you are booking)</b></em>
        <div class="table-responsive-wrap">
          <table class="table table-responsive cart-checkout-table">
            <thead>
              <tr>
                <th>Car name</th>
                  <th>Percent Price Rate(%)</th>
                     <th>Actual Price</th>
                <th>No of Car</th>
                <th class="price">Total Costs</th>
                <th>&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              
              <tr>
                <td>
                 Adults
                </td>
                <td>
 
               
                </td>
                  <td>
                  </td>
                <td>
                  <div class="counter-number">
                    <div class="sub icon-minus"></div>
                    <input type="text" value="55" readonly>

                    <div class="add icon-plus"></div>
                  </div>
                </td>
                <td class="price">5</td>
              </tr>

              <tr>
                <td>
                 Teens
                </td>
                <td>   </td>
                  <td>
                           
                  </td>
                <td>
                  <div class="counter-number">
                    <div class="sub icon-minus"></div>
                     <input type="text" value="56" readonly>
                    <div class="add icon-plus"></div>
                  </div>
                </td>
                <td class="price">454</td>
              </tr>

                 <tr>
                <td>
                 Children
                </td>
                <td>   </td>
                  <td>

                  </td>
                <td>
                  <div class="counter-number">
                    <div class="sub icon-minus"></div>
                     <input type="text" value="" readonly>
                    <div class="add icon-plus"></div>
                  </div>
                </td>
                <td class="price"></td>
              </tr>

            </tbody>
          </table>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-6">
          <!--   <div class="form-group col-md-8 col-sm-10">
              <label>Have a Promotional Code</label>
              <div class="input-group">
                <div class="input-group-addon icon-tag">
                </div>
                <input type="text" class="form-control" placeholder="Code">
                <div class="input-group-btn">
                  <button class="btn btn-primary">Submit</button>
                </div>
              </div>
              <br>
              <button class="btn btn-primary hvr-sweep-to-right">Update Cart</button>
            </div> -->
          </div>
          <div class="col-sm-6">
            <table class="table table-responsive cart-checkout-table">
              <tr>
                <td>
                  Sub Total
                </td>
                <td class="price">
                
                </td>
              </tr>
               <tr>
                <td>
                  Addon total
                </td>
                <td class="price">
                
                </td>
              </tr>

              <tr>
                <td>
                  Discount
                </td>
                <td class="price">
             
                </td>
              </tr>
              <tr class="total">
                <td class="price">Grand Total</td>
                <td class="price"></td>
              </tr>
 <form  method="post"  action="" enctype="multipart/form-data">
          @csrf
               
              <tr class="total">
                       <input type="hidden" name="total_cost" value="" id="total_cost" /> 
                <td class="price">Amount to be Paid</td>
                <td class="price"><input type="text" name="amount" id="amount" value=""/>Down Payment must not below 30% of total booking costs. not below</td>
              </tr>
            </table>
 <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
   <label class="fieldlabels">Select Currency: *</label>
                          <input class="form-control" list="currencies" name="currency" id="currency" required>
    <datalist id="currencies">
         <option value="" selected></option>
                        <option value="KES">KES</option>
                          <option value="USD">USD</option>
                            <option value="EUR">EUR</option>
                              <option value="GBP">GBP</option>
                                <option value="UGX">UGX</option>

                                 <option value="TZS">TZS</option>
                                  <option value="ZMW">ZMW</option>
                                   <option value="RWF">RWF</option>
    </datalist> 
                        </div>

          </div>
        </div>

  
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> <input type="hidden" name="first_name" value="" />
                        </div>
                                   <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <input type="hidden" name="last_name" value="" /> 
                        </div>
  
                        

                          <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <input type="hidden" name="reference" value="" /> 
                        </div>
                          <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <input type="hidden" name="type" value="MERCHANT" /> 
                        </div>
               
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">   <input type="hidden" name="email" value="" /> 
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                       <input type="hidden" name="desc" value="" /> 
                        </div>
                         <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                       <input type="hidden" name="percent_downpayment" value="" id="percent_downpayment" /> 
                        </div>

                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                       
                            <input type="hidden" name="desc" value="" /> 
                        </div>


        <div class="clearfix">          
         <button href="/payConfirm/" class="btn btn-success pull-right hvr-sweep-to-right" type="submit">Proceed</button>        
        </div>



      </form>
      </div>
                
  </section>
  <script src="../../assetff/js/jquery/jquery-2.2.4.min.js"></script>
@endsection


