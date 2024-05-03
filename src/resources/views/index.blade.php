<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        FashionablyLate
      </a>
    </div>
  </header>

  <main>
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Contact</h2>
      </div>
      <form class="form" action="/contacts/confirm" method="post">
        @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="name" placeholder="例：山田太郎" value="{{ old('name') }}" />
            </div>
            <div class="form__error">
               @error('name')
               {{ $message }}
               @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">性別</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--radio">
              <label><input type="radio" name="gender" value="男性" checked />男性</label>
            </div>
            <div class="form__error">
               @error('gender')
               {{ $message }}
               @enderror
            </div>
          </div>
          <div class="form__group-content">
            <div class="form__input--radio">
              <label><input type="radio" name="gender" value="女性" />女性</label>
            </div>
            <div class="form__error">
               @error('gender')
               {{ $message }}
               @enderror
            </div>
          </div>
          <div class="form__group-content">
            <div class="form__input--radio">
              <label><input type="radio" name="gender" value="その他" />その他</label>
            </div>
            <div class="form__error">
               @error('gender')
               {{ $message }}
               @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="例：test@example.com" value="{{ old('email') }}" />
            </div>
            <div class="form__error">
               @error('email')
               {{ $message }}
               @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">電話番号</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="tel" name="tel" placeholder="08012345678" value="{{ old('tel') }}" />
            </div>
            <div class="form__error">
               @error('tel')
               {{ $message }}
               @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">住所</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="address" placeholder="例：東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
            </div>
            <div class="form__error">
               @error('address')
               {{ $message }}
               @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物名</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="building" placeholder="例：千駄ヶ谷マンション101" value="{{ old('building') }}" />
            </div>
            <div class="form__error">
               @error('building')
               {{ $message }}
               @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせの種類</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--select">
              <select name="category" value="{{ old('category') }}">
                <option value="" selected>選択してください</option>
                <option value="1. 商品のお届けについて">1. 商品のお届けについて</option>
                <option value="2. 商品の交換について">2. 商品の交換について</option>
                <option value="3. 商品トラブル">3. 商品トラブル</option>
                <option value="4. ショップへのお問い合わせ">4. ショップへのお問い合わせ</option>
                <option value="5. その他">5. その他</option>              
              </select>
            </div>
            <div class="form__error">
               @error('category')
               {{ $message }}
               @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせ内容</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="content" placeholder="お問い合わせ内容をご記載ください"></textarea>
            </div>
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">確認画面</button>
        </div>
      </form>
      <form class="form" action="/login" method="post">
        @csrf
        <div class="form__button">
          <button class="form__button-submit" type="submit">ログアウト</button>
        </div>
      </form>
    </div>
  </main>
</body>

</html>