@extends('layout.app')

@section('content')

<div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
          <div class="mdc-layout-grid__cell--span-8">
            <div class="mdc-card">
              <h6 class="card-title">Tambah Data</h6>
              <div class="template-demo">
                <div class="mdc-layout-grid__inner">
                    
                  <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                      
                    <div class="mdc-text-field">
                    <form action="{{route('dashboard.store') }}" method="POST">
                    @CSRF
                      <input class="mdc-text-field__input" type="text" name="dteday" id="text-field-hero-input">
                      <div class="mdc-line-ripple"></div>
                      <label for="text-field-hero-input" class="mdc-floating-label">Tanggal</label>
                    </div>
                  </div>

                  
                  <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                    <div class="mdc-text-field mdc-text-field--outlined">
                      <input class="mdc-text-field__input" type="text" name="temp" id="text-field-hero-input">
                      <div class="mdc-notched-outline">
                        <div class="mdc-notched-outline__leading"></div>
                        <div class="mdc-notched-outline__notch">
                          <label for="text-field-hero-input" class="mdc-floating-label">Suhu</label>
                        </div>
                        <div class="mdc-notched-outline__trailing"></div>
                      </div>
                    </div>

                    <div class="mdc-text-field mdc-text-field--outlined">
                            <input class="mdc-text-field__input" type="text" name="hum" id="text-field-hero-input">
                            <div class="mdc-notched-outline">
                              <div class="mdc-notched-outline__leading"></div>
                              <div class="mdc-notched-outline__notch">
                                <label for="text-field-hero-input" class="mdc-floating-label">Kelembaban</label>
                              </div>
                              <div class="mdc-notched-outline__trailing"></div>
                            </div>
                          </div>
                  </div>
                  
                  <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                    <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon">
                     
                      <input class="mdc-text-field__input" type="text" name="windspeed" id="text-field-hero-input">
                      <div class="mdc-notched-outline">
                        <div class="mdc-notched-outline__leading"></div>
                        <div class="mdc-notched-outline__notch">
                          <label for="text-field-hero-input" class="mdc-floating-label">Kecepatan Angin</label>
                        </div>
                        <div class="mdc-notched-outline__trailing"></div>
                      </div>
                    </div>
                  </div>
                  <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                    <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-trailing-icon">
                      
                      <input class="mdc-text-field__input" type="text" name="weathersit" id="text-field-hero-input">
                      <div class="mdc-notched-outline">
                        <div class="mdc-notched-outline__leading"></div>
                        <div class="mdc-notched-outline__notch">
                          <label for="text-field-hero-input" class="mdc-floating-label">Weathersit</label>
                        </div>
                        <div class="mdc-notched-outline__trailing"></div>
                      </div>
                    </div>
                  </div>
                    <td>
                        <div class="template-demo">
                                <button type="submit" class="mdc-button mdc-button--unelevated">
                                SIMPAN
                                </button>
                    </td>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>


@endsection