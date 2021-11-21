<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class WalletController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wallet  $wallet
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Wallet $wallet)
    {
        return new JsonResponse($wallet->toArray(), 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wallet  $wallet
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Wallet $wallet)
    {
        $wallet->update(json_decode($request->getContent() ?? '{}', true));

        return new JsonResponse($wallet->toArray(), 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wallet  $wallet
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Wallet $wallet)
    {
        $wallet->delete();

        return new JsonResponse([], 200);
    }
}
