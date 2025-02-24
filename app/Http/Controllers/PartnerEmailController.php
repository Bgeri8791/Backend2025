<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storepartner_emailRequest;
use App\Http\Requests\Updatepartner_emailRequest;
use App\Models\partner_email;

class PartnerEmailController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/partner-emails",
     *     summary="List all partner emails",
     *     tags={"Partner Emails"},
     *     security={{"ApiKeyAuth":{}}},
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/PartnerEmail"))
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Unauthorized - Invalid API Key"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="No partner emails found"
     *     )
     * )
     */
    public function index()
    {
        return response()->json(partner_email::all(), 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storepartner_emailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(partner_email $partner_email)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(partner_email $partner_email)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatepartner_emailRequest $request, partner_email $partner_email)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(partner_email $partner_email)
    {
        //
    }
}
