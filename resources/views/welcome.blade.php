@extends('layouts.app')
@section('content')
    <div class="container">
        @if (session('stutus'))
            {{ session('stutus') }}
        @endif
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <form action="{{ url('qr_code') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" value="{{ old('name') }}" name="name" placeholder="enter name">
                        </div>
                        @error('name')
                            <span>{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <input type="text" class="form-control" value="{{ old('body') }}" name="body" placeholder="enter body">
                        </div>
                        @error('body')
                            <span>{{ $message }}</span>
                        @enderror
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label for="size">size of qr</label>
                                <select name="size" id="" class="form-control">
                                    <option value="300">300*300</option>
                                    <option value="600">600*600</option>
                                    <option value="900">900*900</option>
                                </select>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="img">type of img</label>
                                <select name="img" id="" class="form-control">
                                    <option value="svg">svg</option>
                                    <option value="eps">eps</option>
                                </select>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="correction">Error Correction</label>
                                <select name="correction" id="" class="form-control">
                                    <option value="L">7%</option>
                                    <option value="M">15%</option>
                                    <option value="Q">25%</option>
                                    <option value="H">30%</option>
                                </select>
                            </div>	

                            <div class="form-group col-md-3">
                                <label for="encoding">encoding</label>
                                <select name="encoding" id="" class="form-control">
                                    <option value="UTF-8">UTF-8</option>
                                    <option value="ISO-8859-1">ISO-8859-1</option>
                                    <option value="ISO-8859-2">ISO-8859-2</option>
                                    <option value="ISO-8859-3">ISO-8859-3</option>
                                    <option value="ISO-8859-4">ISO-8859-4</option>
                                    <option value="ISO-8859-5">ISO-8859-5</option>
                                    <option value="ISO-8859-6">ISO-8859-6</option>
                                    <option value="ISO-8859-7">ISO-8859-7</option>
                                    <option value="ISO-8859-8">ISO-8859-8</option>
                                    <option value="ISO-8859-9">ISO-8859-9</option>
                                    <option value="ISO-8859-10">ISO-8859-10</option>
                                    <option value="ISO-8859-11">ISO-8859-11</option>
                                    <option value="ISO-8859-12">ISO-8859-12</option>
                                    <option value="ISO-8859-13">ISO-8859-13</option>
                                    <option value="ISO-8859-14">ISO-8859-14</option>
                                    <option value="ISO-8859-15">ISO-8859-15</option>
                                    <option value="ISO-8859-16">ISO-8859-16</option>
                                    <option value="SHIFT-JIS">SHIFT-JIS</option>
                                    <option value="WINDOWS-1250">WINDOWS-1250</option>
                                    <option value="WINDOWS-1251">WINDOWS-1251</option>
                                    <option value="WINDOWS-1252">WINDOWS-1252</option>
                                    <option value="WINDOWS-1256">WINDOWS-1256</option>
                                    <option value="UTF-16BE">UTF-16BE</option>
                                    <option value="ASCII">ASCII</option>
                                    <option value="GBK">GBK</option>
                                    <option value="EUC-KR">EUC-KR</option>
                                </select>
                            </div>	
                        </div>
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label for="eye">eye</label>
                                <select name="eye" id="" class="form-control">
                                    <option value="square">square</option>
                                    <option value="circle">circle</option>
                                </select>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="">margin</label>
                                <input type="number" class="form-control" name="margin" minlength="0" step="1" id="">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="correction">color</label>
                                <input type="color" class="form-control" name="color" id="">
                            </div>	

                            <div class="form-group col-md-3">
                                <label for="qr_style">qr style</label>
                                <select name="qr_style" id="" class="form-control">
                                    <option value="square">square</option>
                                    <option value="dot">dot</option>
                                    <option value="round">round</option>
                                </select>
                            </div>	
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
            @if (session('code'))
                {!! session('code') !!}
            @endif
            </div>
        </div>    
    </div>
@endsection        
