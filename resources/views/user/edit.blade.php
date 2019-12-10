@extends('layouts.backend')

@section('content')

<div class="page-wrapper mdc-toolbar-fixed-adjust">
    <main class="content-wrapper">
        <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
                <div class="mdc-layout-grid__cell--span-8">
                    <div class="mdc-card">
                        <h6 class="card-title">Edit Profile</h6>
                        <div class="template-demo">
                            <form action="{{ route('users.update',$user->id)  }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                    <div
                                        class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-trailing-icon">
                                        <input class="mdc-text-field__input" type="text" name="name"
                                            id="text-field-hero-input" value="{{$user->name}}">
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label for="text-field-hero-input"
                                                    class="mdc-floating-label">Nama</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                    <div
                                        class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-trailing-icon">
                                        <input class="mdc-text-field__input" type="text" name="email"
                                            id="text-field-hero-input" value="{{$user->email}}">
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label for="text-field-hero-input"
                                                    class="mdc-floating-label">Email</label>
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
</div>
</div>
@endsection
