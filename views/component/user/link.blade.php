<a @php if($user->name != 'Tripi külastaja') { echo 'href="'.route('user.show', [$user]).'"'; } @endphp >{{ $user->name }}</a>