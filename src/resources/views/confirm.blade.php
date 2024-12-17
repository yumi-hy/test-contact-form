@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
@endsection

@section('content')

    <div class="confirm__content">
      <div class="confirm__heading">
        <h2>Confirm</h2>
      </div>
      <form class="form" action="/contacts" method="post">
      @csrf
        <div class="confirm-table">
          <table class="confirm-table__inner">
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お名前</th>
              <td class="confirm-table__text">
                <div class="flex">
                  <input type="text" name="first_name" value="{{ $contact['first_name'] }}" readonly />
                  <input type="text" name="last_name" value="{{ $contact['last_name'] }}" readonly />
                </div>
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">性別</th>
              <td class="confirm-table__text">
                {{ $contact['gender'] }}
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">メールアドレス</th>
              <td class="confirm-table__text">
                <input type="email" name="email" value="{{ $contact['email'] }}" readonly />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">電話番号</th>
              <td class="confirm-table__text">
                <input type="tel" name="tel" value="{{ $contact['tel'] }}" readonly />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">住所</th>
              <td class="confirm-table__text">
                <input type="text" name="address" value="{{ $contact['address'] }}" readonly />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">建物名</th>
              <td class="confirm-table__text">
                <input type="text" name="building" value="{{ $contact['building'] }}" readonly />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お問い合わせの種類</th>
              <td class="confirm-table__text">
                <select name="detail" disabled>
                  <option value="問い合わせ1" {{ $contact['detail'] === '問い合わせ1' ? 'selected' : '' }}>問い合わせ1</option>
                  <option value="問い合わせ2" {{ $contact['detail'] === '問い合わせ2' ? 'selected' : '' }}>問い合わせ2</option>
                  <option value="問い合わせ3" {{ $contact['detail'] === '問い合わせ3' ? 'selected' : '' }}>問い合わせ3</option>
                </select>
                <input type="hidden" name="detail" value="{{ $contact['detail'] }}">
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お問い合わせ内容</th>
              <td class="confirm-table__text">
                <input type="text" name="content" value="{{ $contact['content'] }}" readonly />
              </td>
            </tr>
          </table>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">送信</button>
        </div>
      </form>
    </div>
@endsection