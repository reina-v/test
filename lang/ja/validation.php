<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

'accepted' => ':attributeを承認してください。',
    'accepted_if' => ':otherが:valueの場合、:attributeを承認してください。',
    'active_url' => ':attributeは有効なURLではありません。',
    'after' => ':attributeには:date以降の日付を指定してください。',
    'after_or_equal' => ':attributeには:date以降の日付を指定してください。',
    'alpha' => ':attributeには英字のみ使用できます。',
    'alpha_dash' => ':attributeには英数字、ダッシュ（-）、アンダースコア（_）が使用できます。',
    'alpha_num' => ':attributeには英数字のみ使用できます。',
    'array' => ':attributeには配列を指定してください。',
    'ascii' => ':attributeには半角英数字と記号のみを使用してください。',
    'before' => ':attributeには:date以前の日付を指定してください。',
    'before_or_equal' => ':attributeには:date以前の日付を指定してください。',
    'between' => [
        'numeric' => ':attributeには:minから:maxまでの数値を指定してください。',
        'file' => ':attributeには:min〜:max KBのファイルを指定してください。',
        'string' => ':attributeは:min文字から:max文字で入力してください。',
        'array' => ':attributeの項目は:min〜:max個で指定してください。',
    ],
    'boolean' => ':attributeにはtrueかfalseを指定してください。',
    'confirmed' => ':attributeの確認が一致しません。',
    'current_password' => 'パスワードが正しくありません。',
    'date' => ':attributeは有効な日付ではありません。',
    'date_equals' => ':attributeには:dateと同じ日付を指定してください。',
    'date_format' => ':attributeの形式は:formatと一致しません。',
    'decimal' => ':attributeは:decimal桁の小数である必要があります。',
    'declined' => ':attributeは拒否する必要があります。',
    'declined_if' => ':otherが:valueの場合、:attributeは拒否する必要があります。',
    'different' => ':attributeと:otherには異なる値を指定してください。',
    'digits' => ':attributeは:digits桁でなければなりません。',
    'digits_between' => ':attributeは:min〜:max桁で指定してください。',
    'dimensions' => ':attributeの画像サイズが無効です。',
    'distinct' => ':attributeに重複した値があります。',
    'doesnt_end_with' => ':attributeは次のいずれかで終わってはいけません: :values。',
    'doesnt_start_with' => ':attributeは次のいずれかで始まってはいけません: :values。',
    'email' => ':attributeは有効なメールアドレス形式で入力してください。',
    'ends_with' => ':attributeは次のいずれかで終わる必要があります: :values。',
    'enum' => '選択された:attributeが無効です。',
    'exists' => '選択された:attributeが無効です。',
    'file' => ':attributeにはファイルを指定してください。',
    'filled' => ':attributeには値を指定してください。',
    'gt' => [
        'numeric' => ':attributeは:valueより大きくなければなりません。',
        'file' => ':attributeは:value KBより大きくなければなりません。',
        'string' => ':attributeは:value文字より多く入力してください。',
        'array' => ':attributeの項目は:value個より多くなければなりません。',
    ],
    'gte' => [
        'numeric' => ':attributeは:value以上でなければなりません。',
        'file' => ':attributeは:value KB以上でなければなりません。',
        'string' => ':attributeは:value文字以上で入力してください。',
        'array' => ':attributeの項目は:value個以上でなければなりません。',
    ],
    'image' => ':attributeには画像ファイルを指定してください。',
    'in' => '選択された:attributeが無効です。',
    'in_array' => ':attributeは:otherに存在しません。',
    'integer' => ':attributeには整数を指定してください。',
    'ip' => ':attributeには有効なIPアドレスを指定してください。',
    'ipv4' => ':attributeには有効なIPv4アドレスを指定してください。',
    'ipv6' => ':attributeには有効なIPv6アドレスを指定してください。',
    'json' => ':attributeには有効なJSON文字列を指定してください。',
    'lowercase' => ':attributeは小文字である必要があります。',
    'lt' => [
        'numeric' => ':attributeは:valueより小さくなければなりません。',
        'file' => ':attributeは:value KBより小さくなければなりません。',
        'string' => ':attributeは:value文字より少なく入力してください。',
        'array' => ':attributeの項目は:value個未満でなければなりません。',
    ],
    'lte' => [
        'numeric' => ':attributeは:value以下でなければなりません。',
        'file' => ':attributeは:value KB以下でなければなりません。',
        'string' => ':attributeは:value文字以下で入力してください。',
        'array' => ':attributeの項目は:value個以下でなければなりません。',
    ],
    'mac_address' => ':attributeには有効なMACアドレスを指定してください。',
    'max' => [
        'numeric' => ':attributeには:max以下の数字を指定してください。',
        'file' => ':attributeには:max KB以下のファイルを指定してください。',
        'string' => ':attributeは:max文字以内で入力してください。',
        'array' => ':attributeの項目は:max個以下で指定してください。',
    ],
    'max_digits' => ':attributeは:max桁以下でなければなりません。',
    'mimes' => ':attributeには:values形式のファイルを指定してください。',
    'mimetypes' => ':attributeには:values形式のファイルを指定してください。',
    'min' => [
        'numeric' => ':attributeには:min以上の数字を指定してください。',
        'file' => ':attributeには:min KB以上のファイルを指定してください。',
        'string' => ':attributeは:min文字以上で入力してください。',
        'array' => ':attributeの項目は:min個以上で指定してください。',
    ],
    'min_digits' => ':attributeは:min桁以上でなければなりません。',
    'missing' => ':attributeフィールドが存在してはいけません。',
    'missing_if' => ':otherが:valueの場合、:attributeフィールドが存在してはいけません。',
    'missing_unless' => ':otherが:valueでない限り、:attributeフィールドが存在してはいけません。',
    'missing_with' => ':valuesが存在する場合、:attributeフィールドが存在してはいけません。',
    'missing_with_all' => ':valuesがすべて存在する場合、:attributeフィールドが存在してはいけません。',
    'multiple_of' => ':attributeは:valueの倍数でなければなりません。',
    'not_in' => '選択された:attributeが無効です。',
    'not_regex' => ':attributeの形式が無効です。',
    'numeric' => ':attributeには数字を指定してください。',
    'password' => [
        'letters' => ':attributeには少なくとも1つの文字を含めてください。',
        'mixed' => ':attributeには大文字と小文字をそれぞれ少なくとも1つ含めてください。',
        'numbers' => ':attributeには少なくとも1つの数字を含めてください。',
        'symbols' => ':attributeには少なくとも1つの記号を含めてください。',
        'uncompromised' => '入力された:attributeは情報漏洩に含まれているため使用できません。別の:attributeを指定してください。',
    ],
    'present' => ':attributeが存在している必要があります。',
    'prohibited' => ':attributeフィールドは禁止されています。',
    'prohibited_if' => ':otherが:valueの場合、:attributeフィールドは禁止されています。',
    'prohibited_unless' => ':otherが:valuesでない限り、:attributeフィールドは禁止されています。',
    'prohibits' => ':attributeフィールドは:otherの入力を禁止します。',
    'regex' => ':attributeの形式が無効です。',
    'required' => ':attributeは必須です。',
    'required_array_keys' => ':attributeには次の項目を含めてください: :values。',
    'required_if' => ':otherが:valueの場合、:attributeは必須です。',
    'required_if_accepted' => ':otherが承認されている場合、:attributeは必須です。',
    'required_unless' => ':otherが:valuesでない限り、:attributeは必須です。',
    'required_with' => ':valuesが存在する場合、:attributeは必須です。',
    'required_with_all' => ':valuesがすべて存在する場合、:attributeは必須です。',
    'required_without' => ':valuesが存在しない場合、:attributeは必須です。',
    'required_without_all' => ':valuesがすべて存在しない場合、:attributeは必須です。',
    'same' => ':attributeと:otherが一致しません。',
    'size' => [
        'numeric' => ':attributeは:sizeでなければなりません。',
        'file' => ':attributeは:size KBでなければなりません。',
        'string' => ':attributeは:size文字で入力してください。',
        'array' => ':attributeは:size個の項目を含めてください。',
    ],
    'starts_with' => ':attributeは次のいずれかで始まる必要があります: :values。',
    'string' => ':attributeには文字列を指定してください。',
    'timezone' => ':attributeには正しいタイムゾーンを指定してください。',
    'unique' => 'この:attributeはすでに使用されています。',
    'uploaded' => ':attributeのアップロードに失敗しました。',
    'uppercase' => ':attributeは大文字である必要があります。',
    'url' => ':attributeは有効なURL形式で入力してください。',
    'ulid' => ':attributeは有効なULIDでなければなりません。',
    'uuid' => ':attributeは有効なUUIDでなければなりません。',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'カスタムメッセージ',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'product_name' => '商品名',
        'company_id' => 'メーカー名',
        'price' => '価格',
        'stock' => '在庫数',        
    ],

];
