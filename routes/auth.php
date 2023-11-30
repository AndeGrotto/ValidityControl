Route::get('/cadastro', [RegisteredUserController::class, 'create'])
                ->middleware('guest')
                ->name('register');

Route::post('/cadastro', [RegisteredUserController::class, 'store'])
                ->middleware('guest');

Route::get('/', [AuthenticatedSessionController::class, 'create'])
                ->middleware('guest')
                ->name('login');

Route::post('/', [AuthenticatedSessionController::class, 'store'])
                ->middleware('guest');