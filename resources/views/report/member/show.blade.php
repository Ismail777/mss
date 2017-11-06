@extends('layouts.app')
@section('pageTitle')
  *Month* Report
@endsection
@section('content')
  <div class="content-header">
    <h1>Month Statment</h1>
  </div>
  <hr>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">*MONTH*</h3>
    </div>
    <div class="panel-body">
      <div class="table-responsive">
        <table class="table table-condensed">
                    <tbody>
                      <tr>
                        <td colspan="5" style="font-weight:bold" align="left">Statement Month of November </td>
                      </tr>
                      <tr>
                        <td width="50%">&nbsp;</td>
                        <td style="font-weight:bold" width="15%" align="left">Cash Point</td>
                        <td width="10%">&nbsp;</td>
                        <td style="font-weight:bold" width="15%" align="left">Reward Point</td>
                        <td width="10%">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style="font-weight:bold" width="50%" align="left">Points from previous</td>
                        <td width="15%" align="right">
                                                0.00
                                            </td>
                        <td width="10%">&nbsp;</td>
                        <td width="15%" align="right">
                                                0.00
                                            </td>
                        <td width="10%">&nbsp;</td>
                      </tr>
                      <tr><td colspan="5">&nbsp;</td></tr>
                      <tr>
                        <td style="font-weight:bold" width="50%" align="left">Earning this month</td>
                        <td colspan="4" width="50%" align="left">&nbsp;</td>
                      </tr>
                      <tr>
                        <td width="50%" align="left">Offline</td>
                        <td width="15%" align="right">
                                                0.00
                                            </td>
                        <td width="10%">&nbsp;</td>
                        <td width="15%" align="right">
                                                0.00
                                            </td>
                        <td width="10%">&nbsp;</td>
                      </tr>
                      <tr>
                        <td width="50%" align="left">Online</td>
                        <td width="15%" align="right">
                                                0.00
                                            </td>
                        <td width="10%">&nbsp;</td>
                        <td width="15%" align="right">
                                                0.00
                                            </td>
                        <td width="10%">&nbsp;</td>
                      </tr>
                      <tr>
                        <td width="50%" align="left">Other</td>
                        <td width="15%" align="right">
                                                0.00
                                            </td>
                        <td width="10%">&nbsp;</td>
                        <td width="15%" align="right">
                                                0.00
                                            </td>
                        <td width="10%">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style="font-weight:bold" width="50%" align="left">Total</td>
                        <td style="font-weight:bold" width="15%" align="right">
                                                0.00
                                            </td>
                        <td width="10%">&nbsp;</td>
                        <td style="font-weight:bold" width="15%" align="right">
                                                0.00
                                            </td>
                        <td width="10%">&nbsp;</td>
                      </tr>
                      <tr><td colspan="5">&nbsp;</td></tr>
                      <tr>
                        <td style="font-weight:bold" width="50%" align="left">Redemption this month</td>
                        <td width="15%" align="right">
                                                0.00
                                            </td>
                        <td width="10%">&nbsp;</td>
                        <td width="15%" align="right">
                                                0.00
                                            </td>
                        <td width="10%">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style="font-weight:bold" width="50%" align="left">Your new points total</td>
                        <td style="font-weight:bold" width="15%" align="right">
                                                0.00
                                            </td>
                        <td width="10%">&nbsp;</td>
                        <td style="font-weight:bold" width="15%" align="right">
                                                0.00
                                            </td>
                        <td width="10%">&nbsp;</td>
                      </tr>
                    </tbody>
                  </table>
      </div>
    </div>
    <div class="panel-footer">
      MSS
    </div>
  </div>
@endsection
