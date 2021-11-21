<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\BaseController;
use App\Models\Wallet;
use Illuminate\Http\Request;

class WalletController extends BaseController
{

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wallet  $wallet
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Wallet $wallet)
    {
        return $this->createJsonResponse($wallet->toArray());
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

        return $this->createJsonResponse($wallet->toArray());
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

        return $this->createJsonResponse();
    }
}
