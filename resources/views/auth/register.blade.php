@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="location" class="col-md-4 col-form-label text-md-right">Province</label>

                            <div class="col-md-6">
                              <select name="location" class="form-control">
                                <option value="">Please Select</option>
                                <option value="Bangkok">Bangkok</option>
                                <option value="Samut Prakan">Samut Prakan</option>
                                <option value="Nonthaburi">Nonthaburi</option>
                                <option value="Pathum Thani">Pathum Thani</option>
                                <option value="Phra Nakhon Si Ayutthaya">Phra Nakhon Si Ayutthaya</option>
                                <option value="Ang Thong">Ang Thong</option>
                                <option value="Loburi">Loburi</option>
                                <option value="Sing Buri">Sing Buri</option>
                                <option value="Chai Nat">Chai Nat</option>
                                <option value="Saraburi">Saraburi</option>
                                <option value="Chon Buri">Chon Buri</option>
                                <option value="Rayong">Rayong</option>
                                <option value="Chanthaburi">Chanthaburi</option>
                                <option value="Trat">Trat</option>
                                <option value="Chachoengsao">Chachoengsao</option>
                                <option value="Prachin Buri">Prachin Buri</option>
                                <option value="Nakhon Nayok">Nakhon Nayok</option>
                                <option value="Sa Kaeo">Sa Kaeo</option>
                                <option value="Nakhon Ratchasima">Nakhon Ratchasima</option>
                                <option value="Buri Ram">Buri Ram</option>
                                <option value="Surin">Surin</option>
                                <option value="Si Sa Ket">Si Sa Ket</option>
                                <option value="Ubon Ratchathani">Ubon Ratchathani</option>
                                <option value="Yasothon">Yasothon</option>
                                <option value="Chaiyaphum">Chaiyaphum</option>
                                <option value="Amnat Charoen">Amnat Charoen</option>
                                <option value="Nong Bua Lam Phu">Nong Bua Lam Phu</option>
                                <option value="Khon Kaen">Khon Kaen</option>
                                <option value="Udon Thani">Udon Thani</option>
                                <option value="Loei">Loei</option>
                                <option value="Nong Khai">Nong Khai</option>
                                <option value="Maha Sarakham">Maha Sarakham</option>
                                <option value="Roi Et">Roi Et</option>
                                <option value="Kalasin">Kalasin</option>
                                <option value="Sakon Nakhon">Sakon Nakhon</option>
                                <option value="Nakhon Phanom">Nakhon Phanom</option>
                                <option value="Mukdahan">Mukdahan</option>
                                <option value="Chiang Mai">Chiang Mai</option>
                                <option value="Lamphun">Lamphun</option>
                                <option value="Lampang">Lampang</option>
                                <option value="Uttaradit">Uttaradit</option>
                                <option value="Phrae">Phrae</option>
                                <option value="Nan">Nan</option>
                                <option value="Phayao">Phayao</option>
                                <option value="Chiang Rai">Chiang Rai</option>
                                <option value="Mae Hong Son">Mae Hong Son</option>
                                <option value="Nakhon Sawan">Nakhon Sawan</option>
                                <option value="Uthai Thani">Uthai Thani</option>
                                <option value="Kamphaeng Phet">Kamphaeng Phet</option>
                                <option value="Tak">Tak</option>
                                <option value="Sukhothai">Sukhothai</option>
                                <option value="Phitsanulok">Phitsanulok</option>
                                <option value="Phichit">Phichit</option>
                                <option value="Phetchabun">Phetchabun</option>
                                <option value="Ratchaburi">Ratchaburi</option>
                                <option value="Kanchanaburi">Kanchanaburi</option>
                                <option value="Suphan Buri">Suphan Buri</option>
                                <option value="Nakhon Pathom">Nakhon Pathom</option>
                                <option value="Samut Sakhon">Samut Sakhon</option>
                                <option value="Samut Songkhram">Samut Songkhram</option>
                                <option value="Phetchaburi">Phetchaburi</option>
                                <option value="Prachuap Khiri Khan">Prachuap Khiri Khan</option>
                                <option value="Nakhon Si Thammarat">Nakhon Si Thammarat</option>
                                <option value="Krabi">Krabi</option>
                                <option value="Phangnga">Phangnga</option>
                                <option value="Phuket">Phuket</option>
                                <option value="Surat Thani">Surat Thani</option>
                                <option value="Ranong">Ranong</option>
                                <option value="Chumphon">Chumphon</option>
                                <option value="Songkhla">Songkhla</option>
                                <option value="Satun">Satun</option>
                                <option value="Trang">Trang</option>
                                <option value="Phatthalung">Phatthalung</option>
                                <option value="Pattani">Pattani</option>
                                <option value="Yala">Yala</option>
                                <option value="Narathiwat">Narathiwat</option>
                                <option value="buogkan">buogkan</option>
                              </select>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
