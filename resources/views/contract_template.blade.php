<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section style="width: 100%; margin: auto;">
        <div style="border: 2px solid black; padding: 10px 20px 10px 20px;">
            <h1 style="font-size: 16px;" align="right">AMERICAN REMODELING ENTERPRISES, INC. </h1>
            <p align="right">57 James st</p>
            <p align="right">Schuylkill Haven, PA 17972 </p>
            <p align="right">Phone: 888-739-7339 • Fax: 570-739-1984</p>
            <p align="right">PA H I C #004002</p>
            <h1 align='center' style="font-size: 18px;">PENNSYLVANIA'S CONSUMER PROTECTION ACT</h1>
            <h1 align='center' style="font-size: 18px;">HOME IMPROVEMENT CONTRACT</h1>
            <h1 style="font-size: 16px;">PARAGRAPH 1 - OWNER:</h1>
            <p>Name(s):{{ $data['consumer_protection_form']['paraOneName'] }}</p>
            <p>Address: {{ $data['consumer_protection_form']['paraOneAddress'] }}</p>
            <p>Telephone Number: {{ $data['consumer_protection_form']['paraOneTelephoneNumber'] }}, E-Mail:
                {{ $data['consumer_protection_form']['paraOneEmail'] }} </p>
            <h1 style="font-size: 16px;">PARAGRAPH 2— WORK: </h1>
            <p>Contractor agrees to provide all labor and materials to complete the Work described in the attached Scope
                of Work for the purpose of {{ $data['consumer_protection_form']['paraTwoLabourAndMaterialPurpose'] }}
            </p>
            <h3 style="font-size: 16px;">PARAGRAPH 3— START AND COMPLETE DATES:</h3>
            <p>Subject to the provisions of this agreement, the anticipated start date for the Work is
                {{ $data['consumer_protection_form']['paraThreeStartDate'] }} , and the anticipated completion date is
                {{ $data['consumer_protection_form']['paraThreeCompletionDate'] }} </p>
            <h1 style="font-size: 16px;">PARAGRAPH 4 — PRICE AND DEPOSIT/ADVANCE:</h1>
            <p>Owner agrees to pay a total Price of ${{ $data['consumer_protection_form']['paraFourTotalPrice'] }} for
                the Work. At the signing of this agreement, Owner will pay a down payment representing the Deposit and
                an Advance for the Purchase of Special Order Materials, according to the
                attached Payment Schedule.</p>
            <h1 style="font-size: 16px;">PARAGRAPH 5— ATTACHMENTS:</h1>
            <table style="width: 100%;">
                <tbody>
                    @foreach ($data['consumer_protection_form']['paraFiveAttachmentsSelected'] as $paraFiveAttachmentsSelected)
                        <tr>
                            <td>{{ $paraFiveAttachmentsSelected }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <h1 style="font-size: 12px;">BY SIGNING BELOW, OWNER ACKNOWLEDGES THAT (1) OWNER HAS READ AND UNDERSTANDS
                ALL OF THE PROVISIONS OF THIS CONTRACT, INCLUDING THE PROVISIONS ON THE REVERSE OF THIS PAGE AND THE
                ATTACHMENTS TO THIS CONTRACT, (2) OWNER UNDERSTANDS THAT ONCE
                SIGNED THIS AGREEMENT IS A BINDING CONTRACT, (3) OWNER HAS BEEN ADVISED TO CONSULT AN ATTORNEY BEFORE
                SIGNING IF LEGAL ADVICE IS DESIRED, AND (4) OWNER ACKNOWLEDGES RECEIPT OF A COPY OF THIS CONTRACT AND
                ALL ATTACHMENTS TO THIS CONTRACT,
                INCLUDING TWO COPIES OF THE OWNER'S RIGHT TO CANCEL NOTICE. (EACH ATTACHMENT TO BE INCLUDED MUST BE
                CHECKED OFF)</h1>
            <h1 style="font-size: 11px;">You, the Owner, may cancel this transaction at any time prior to miclnight of
                the third business day after the date of this transaction. See attached notice of cancellation form for
                an explanation of this right. </h1>
            <h1 style="font-size: 11px;">Owners Certification regarding EPA's Renovation, Repair and Painting Rule:</h1>
            @foreach ($data['consumer_protection_form']['ownerCertificationSelected'] as $ownerCertificationSelected)
                <h1 style="font-size: 11px;">{{ $ownerCertificationSelected }}</h1>
            @endforeach
            <table style="width: 100%;">
                <thead>
                    <tr>
                        <th style="font-size: 16px;">ACCEPTANCE BY OWNER
                            <table style="width: 100%; margin-top: 3rem;">
                                <thead>
                                    <tr>
                                        <th><img src="data:image/png;base64,{{ $data['owner_signature'] }}"
                                                height="50" width="50" /></th>
                                        <th>{{ date('d/m/Y') }}</th>
                                    </tr>
                                </thead>
                                </tbody>
                            </table>
                            <table style="width: 100%; margin-top: 3rem;">
                                <thead>
                                    <tr>
                                        <th>Owner Signature</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                </tbody>
                            </table>
                        </th>
                        <th style="font-size: 16px;">ACCEPTANCE BY CONTRACTOR
                            <table style="width: 100%; margin-top: 3rem;">
                                <thead>
                                    <tr>
                                        <th><img src="data:image/png;base64,{{ $data['contractor_signature'] }}"
                                                height="50" width="50" /></th>
                                        <th>{{ date('d/m/Y') }}</th>
                                    </tr>
                                </thead>
                                </tbody>
                                <table style="width: 100%; margin-top: 3rem;">
                                    <thead>
                                        <tr>
                                            <th>Contractor Signature</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    </tbody>
                                </table>
                        </th>
                    </tr>
                </thead>
            </table>

            <p align="center">
                Copyright — HICPA Compliance, LLC — 2014 — All Rights Reservedp
            </p>
        </div>
    </section>



    <section style=" width: 100%; margin: auto;">
        <div style="margin-top: 2rem; border: 2px solid black; padding: 10px 20px 10px 20px;">
            <h1 align='center' style="font-size: 18px;">ATTACHMENT - SCOPE OF WORK, MATERIALS AND SPECIFICATIONS </h1>
            <h1 style="font-size: 16px; margin-top: 1rem;">OPTION A: (a check mark indicates that this option is
                selected)</h1>
            <p style="margin-top: 0px;">The plans, drawings, specifications of labor and materials, allowances and
                special order are set forth in detail in the attached document, sometimes identified as the estimate,
                proposal, quote, or similar name.The specifics of the attached
                page(s) are incorporated herein by reference.</p>
            <h1 style="font-size: 16px; margin-top: 1rem">OPTION B: (a check mark indicates that this option is
                selected)</h1>
            <h1 style="font-size: 14px; margin-top: 1rem">1. PLANS AND DRAWINGS:</h1>
            <p>Dated: {{ $data['scope_of_work_material_and_specification']['plansAndDrawingsDate'] }} ; Consisting of
                {{ $data['scope_of_work_material_and_specification']['plansAndDrawingsSheets'] }} sheets; Prepared by
                {{ $data['scope_of_work_material_and_specification']['plansAndDrawingsPreparedBy'] }}</p>
            <h1 style="font-size: 14px; margin-top: 1rem">2. SPECIFICATIONS - LABOR AND MATERIALS: </h1>
            <p>Dated: {{ $data['scope_of_work_material_and_specification']['specificationsDate'] }} ; Consisting of
                {{ $data['scope_of_work_material_and_specification']['specificationsSheets'] }} sheets; Prepared by
                {{ $data['scope_of_work_material_and_specification']['specificationsPreparedBy'] }}</p>
            <h1 style="font-size: 14px; margin-top: 1rem">3. ALLOWANCES:</h1>
            <p>The price of allowance items is an estimate made prior to selection by Owner. If the actual cost,
                following selection by Owner, is greater of less than the allowance price, the Price shall be adjusted
                for the difference by a Change Order executed
                by Owner and Contractor. Owner's selection of allowance i :ems shall be submitted in writing by Owner to
                Contractor. If Owner's election of any allowance item delays the Work, the date to complete shall be
                extended accordingly.</p>
            <table style="width: 100%;">
                <thead>
                    <tr>
                        <th style="font-size: 16px;">Allowance item
                            <table style="width: 100%; margin-top: 3rem;">
                                <thead>
                                    <tr>
                                        <th>{{ $data['scope_of_work_material_and_specification']['allowancesItem'] }}
                                        </th>
                                    </tr>
                                </thead>
                                </tbody>
                            </table>
                        </th>
                        <th style="font-size: 16px;">Allowance Price
                            <table style="width: 100%; margin-top: 3rem;">
                                <thead>
                                    <tr>
                                        <th>$
                                            {{ $data['scope_of_work_material_and_specification']['allowancesPrice'] }}
                                        </th>
                                    </tr>
                                </thead>
                                </tbody>
                            </table>
                        </th>
                    </tr>
                </thead>
            </table>
            <p>SEE REVERSE SIDE FOR ADDITIONAL ALLOWANCE ITEMS</p>
            <h1 style="font-size: 14px; margin-top: 1rem">4. PURCHASE OF SPECIAL ORDER MATERIALS:</h1>
            <p>The Special Order Materials for the Work and the cost thereof are as follows:</p>
            <table style="width: 100%;">
                <thead>
                    <tr>
                        <th style="font-size: 16px;">Allowance item
                            <table style="width: 100%; margin-top: 3rem;">
                                <thead>
                                    <tr>
                                        <th>{{ $data['scope_of_work_material_and_specification']['specialAllowanceItem'] }}
                                        </th>
                                    </tr>
                                </thead>
                                </tbody>
                            </table>

                        </th>
                        <th style="font-size: 16px;">Allowance Price
                            <table style="width: 100%; margin-top: 3rem;">
                                <thead>
                                    <tr>
                                        <th>$
                                            {{ $data['scope_of_work_material_and_specification']['specialAllowancePrice'] }}
                                        </th>
                                    </tr>
                                </thead>
                                </tbody>
                            </table>
                        </th>
                    </tr>
                </thead>
            </table>
            <p>SEE REVERSE SIDE FOR ADDITIONAL ALLOWANCE ITEMS</p>
            <hr>
            <h1 align='center' style="font-size: 18px;">ATTACHMENT - PAYMENT SCHEDULE </h1>
            <p>At the signing of this agreement, Owner will pay to Contractor a down payment in the amount of
                ${{ $data['payment_schedule']['downPaymentAmount'] }} representing (1) a Deposit of $
                {{ $data['payment_schedule']['depositAmount'] }} and (2) an Advance in the amount of
                ${{ $data['payment_schedule']['advanceAmount'] }} for the purchase of Special Order Materials. All
                Special
                Order Materials shall be paid for, in full, when ordered.</p>
            <p>The balance of the Price shall be paid as follows:</p>
            @if ($data['payment_schedule']['isOptionASelected'] == false)
                <p> On completion of the Work</p>
            @else
                <p> Progress payments are due when each phase of the Work is completed:</p>
            @endif
            <p>1. Amount due when Phase 1 is completed: ${{ $data['payment_schedule']['phaseOneAmount'] }}</p>
            <p>Phase 1 is completed when: {{ $data['payment_schedule']['phaseOneAmountCompleted'] }}</p>
            <p>2. Amount due when Phase 2 is completed: $ {{ $data['payment_schedule']['phaseTwoAmount'] }}</p>
            <p>Phase 2 is completed when: {{ $data['payment_schedule']['phaseTwoAmountCompleted'] }}</p>
            <p>3. Amount due when Phase 3 is completed: $ {{ $data['payment_schedule']['phaseThreeAmount'] }}</p>
            <p>Phase 3 is completed when: {{ $data['payment_schedule']['phaseThreeAmountCompleted'] }}</p>
            <p>4. Amount due when Phase 4 is completed: $ {{ $data['payment_schedule']['phaseFourAmount'] }}</p>
            <p>Phase 4 is completed when: {{ $data['payment_schedule']['phaseFourAmountCompleted'] }}</p>
            <p>5. Amount due when Phase 5 is completed: $ {{ $data['payment_schedule']['phaseFiveAmount'] }}</p>
            <p>Phase 5 is completed when: {{ $data['payment_schedule']['phaseFiveAmountCompleted'] }}</p>
            <p align='center'>Copyright - HICPA Compliance, LLC - 2C09 - All Rights Reserved</p>
            <table style="width: 100%;">
                <thead>
                    <tr>

                        <th style="font-size: 16px;">Contractor Initials: <img
                                src="data:image/png;base64,{{ $data['contractor_signature'] }}" height="50"
                                width="50" />
                        </th>
                        <th style="font-size: 16px;">Home Owners Initials: <img
                                src="data:image/png;base64,{{ $data['owner_signature'] }}" height="50"
                                width="50" />
                        </th>
                    </tr>
                </thead>
            </table>
        </div>
    </section>




    <section style=" width: 100%; margin: auto;">
        <div style="margin-top: 2rem; border: 2px solid black; padding: 10px 20px 10px 20px;">
            <h1 align='center' style="font-size: 18px;">ADDITIONAL PROVISIONS</h1>
            <table style="width: 100%;">
                <thead>
                    <tr style="gap: 2rem;">
                        <th style="font-size: 16px;" align="left">Dates:</th>
                        <th style="font-size: 16px;" align="left">Cancellation:</th>
                    </tr>
                    <tr>
                        <th style="text-align: left; font-weight: 100; font-size: 14px;">The anticipated start and
                            complete dates may be subject to delays for a variety of reasons not originally anticipated,
                            including, but not limited to, changes made to the Scope of Work, Materials or
                            Specifications, delays in the
                            receipt of materials required for the Work, adverse weather conditions or other acts of God,
                            unavailability of materials, labor or equipment, delays resulting from Owner's acts or
                            failure to act, the discovery of concealed
                            conditions or hazardous materials or other reasons beyond Contractor's reasonable control.
                        </th>
                        <th style="text-align: left; font-weight: 100; font-size: 14px;">After Owner's Right to Cancel
                            has elapsed, Owner shall be permitted to cancel the Work only upon written consent of
                            Contractor. If such consent is granted, Owner agrees to pay Contractor all costs incurred by
                            Contractor for labor
                            and materials to date for the Work in addition to the profit Contractor would have earned
                            upon completion of the Work, and the parties agree that Contractor's lost profit shall be
                            20% of the total Price. </th>
                    </tr>
                </thead>
                <thead>
                    <tr style="gap: 2rem; ">
                        <th style="font-size: 16px; " align="left ">Special Order Materials: </th>
                        <th style="font-size: 16px; " align="left ">Utilities:</th>
                    </tr>
                    <tr>
                        <th style="text-align: left; font-weight: 100; font-size: 14px; ">Materials specially ordered
                            for the Work cannot be returned by Contractor after they have been ordered. Owner is
                            responsible for the cost of these items even in the event that they are not used for any
                            reason. Contractor will not
                            order these items until Owner's Right to Cancel has elapsed. Owner shall pay to Contractor,
                            in addition to the Deposit, an Advance for such items at the signing of the contract. Owner
                            shall pay to Contractor the cost for such
                            items within two (2) business days of Contractor's invoice for such items indicating that
                            any such items have been ordered.</th>
                        <th style="text-align: left; font-weight: 100; font-size: 14px;">Owner shall provide, at Owner's
                            sole cost and expense, all utilities required for the completion of the Work.</th>
                    </tr>
                </thead>
                <thead>
                    <tr style="gap: 2rem; ">
                        <th style="font-size: 16px; " align="left ">Change Orders: </th>
                        <th style="font-size: 16px; " align="left ">Release:
                    </tr>
                    </tr>
                    <tr>
                        <th style="text-align: left; font-weight: 100; font-size: 14px; ">A written Change Order, signed
                            and dated by Owner and Contractor, is required for any agreed upon change to the Scope of
                            Work, Materials and Specifications, Price and/or Start and Complete Date. </th>
                        <th style="text-align: left; font-weight: 100; font-size: 14px;">Owner grants Contractor
                            permission to take photographs of the Work before, as and after it is completed and to use
                            such photographs, Owner's name and address for publicity purposes. </th>
                    </tr>
                </thead>
                <thead>
                    <tr style="gap: 2rem; ">
                        <th style="font-size: 16px; " align="left ">Payment Schedule: </th>
                        <th style="font-size: 16px; " align="left ">Limited Warranty:
                    </tr>
                    </tr>
                    <tr>
                        <th style="text-align: left; font-weight: 100; font-size: 14px; ">Payments due from Owner to
                            Contractor must be made within business days of Contractor's invoice. Past due payments are
                            subject to a 1-1/2% per month (18% annual) finance charge. Contractor is excused from
                            continuing its work in
                            the event of any failure by Owner to make full and timely payment of any payment due. </th>
                        <th style="text-align: left; font-weight: 100; font-size: 10px;">All labor and materials
                            furnished by Contractor shall be in accordance with the Scope of Work, Materials and
                            Specifications. All labor provided by Contractor shall be performed and provided in a good
                            and workmanlike manner. All
                            materials, appliances and mechanical equipment are provided solely subject to the
                            manufacturer's warranties which shall be provided and assigns to Owner upon payment in full
                            of the Price. For a period of following completion
                            of the Work, Contractor shall, at Contractor's option, repair, replace or reinstall any
                            defects in workmanship provided that written notice of any such defect has been provided by
                            Owner to Contractor prior to such date. EXCEPT
                            AS PROVIDED HEREIN, CONTRACTOR MAKES NO OTHER PROMISES, REPRESENTATIONS OR WARRANTIES OF ANY
                            KIND OR NATURE, EXPRESS OR IMPLIED, INCLUDING THOSE OF MERCHANTABILITY, FITNESS FOR A
                            PARTICULAR PURPOSE, HABITABILITY, WORKMANLIKE
                            CONSTRUCTION, DESIGN, CON DITI DN, QUALITY OR OTHERWISE, AND CONTRACTOR HEREBY DISCLAIMS ANY
                            SUCH REPRESENTATIONS OR WARRANTIES. OWNER ACKNOWLEDGES THAT CONTRACTOR'S WARRANTY
                            OBLIGATIONS ARE HEREBY -IMITED.</th>
                    </tr>
                </thead>
                <thead>
                    <tr style="gap: 2rem; ">
                        <th style="font-size: 16px; " align="left ">Subcontractors: </th>
                        <th style="font-size: 16px; " align="left ">Change in Material Costs:
                    </tr>
                    </tr>
                    <tr>
                        <th style="text-align: left; font-weight: 100; font-size: 14px; ">Contractor may use
                            subcontractors in addition to or in substitution for those initially identified by
                            Contractor. Under no circumstances shall Owner contract for any work with any subcontractor.
                            No subcontractor may agree to any
                            change in the Work on behalf of Contractor. </th>
                        <th style="text-align: left; font-weight: 100; font-size: 14px;">The Price of the Work is based
                            on current prices for materials and delivery :harges. If there is an increase in delivered
                            costs for material, purchased after the date of the contract, such additional cost shall be
                            added tc the
                            Price and Owner shall pay the increase in such cost to Contractor. In the event of any such
                            cost increase, Contractor shall provide Owner with written notice of the increased cost, the
                            specific materials involved and the nature
                            of the increased cost. Owner and Contractor shall execute a Change Order memorializing the
                            increase in the Price. </th>
                    </tr>
                </thead>
                <thead>
                    <tr style="gap: 2rem; ">
                        <th style="font-size: 16px; " align="left ">Liability Insurance: </th>
                        <th style="font-size: 16px; " align="left ">Substitution of Materials:
                    </tr>
                    </tr>
                    <tr>
                        <th style="text-align: left; font-weight: 100; font-size: 14px; ">The law requires that
                            Contractor maintain certain minimum insurance coverage for personal injury liability and
                            property damage liability. Contractor presently maintains insurance coverage in the amount
                            of: ${{ $data['additional_provisions']['personalInjuryLiabilityAmount'] }} for personal
                            injury
                            liability and ${{ $data['additional_provisions']['propertyDamageLiabilityAmount'] }} for
                            property damage liability. In the event that Contractor reduces such coverage prior to
                            completion of the Work, Contractor shall give Owner notice thereof within ten (10) days
                            following such change. </th>
                        <th style="text-align: left; font-weight: 100; font-size: 14px;">Except for Special Order
                            Materials (which may only be changed by a Change Order signed by Owner and Contractor),
                            Contractor shall be permitted to substitute materials, at Contractor's sole discretion,
                            which in Contractor's opinion
                            are of like kind and quality for those otherwise set forth in the Scope of Work, Materials
                            and Specifications. </th>
                    </tr>
                </thead>
                <thead>
                    <tr style="gap: 2rem; ">
                        <th style="font-size: 16px; " align="left ">Entire Agreement: </th>
                        <th style="font-size: 16px; " align="left ">Bureau of Consumer Protection of the Office of
                            the Pennsylvania Attorney General: 1-800-441-2555</th>
                    </tr>
                    <tr>
                        <th style="text-align: left; font-weight: 100; font-size: 14px; ">This two sided document and
                            the indicated attachments contain the whole agreement between Owner and Contractor. There
                            are no other terms, obligations, covenants, representations, statements or conditions, oral
                            or otherwise of any
                            kind whatsoever between the parties. This contract shall not be altered, amended, changed or
                            modified except in writing executed by the parties. (PA#004002) </th>

                    </tr>
                </thead>
                <thead>
                    <tr style="gap: 2rem; ">
                        <th style="font-size: 16px; " align="left ">Governing Law: </th>
                    </tr>
                    <tr>
                        <th style="text-align: left; font-weight: 100; font-size: 14px; ">This contract is governed by
                            the internal laws of the Commonwealth of Pennsylvania.</th>

                    </tr>
                </thead>
                <thead>
                    <tr style="gap: 2rem; ">
                        <th style="font-size: 16px; " align="left ">Permits: </th>
                    </tr>
                    <tr>
                        <th style="text-align: left; font-weight: 100; font-size: 14px; ">Contractor is responsible for
                            obtaining all permits (including building, electrical, mechanical and/or plumbing, but
                            specifically excluding any zoning or similar land use permit) required for the completion of
                            the Work. The cost
                            of such permits is included as part of the Price. </th>
                        <th>Copyright — HICPA Compliance, LLC — 2009 — All Rights Reserved</th>
                    </tr>
                </thead>
                <thead>
                    <tr>
                        <th>Contractor Initials: <img src="data:image/png;base64,{{ $data['contractor_signature'] }}" height="80" width="80"/></th>
                        <th>Home Owners Initials: <img src="data:image/png;base64,{{ $data['owner_signature'] }}" height="80" width="80"/>
                        </th>
                    </tr>
                </thead>
            </table>
        </div>
    </section>

    <section style=" width: 100%; margin: auto;">
        <div style="margin-top: 2rem; border: 2px solid black; padding: 10px 20px 10px 20px;">
            <h1 align='center' style="font-size: 18px">ATTACHMENT - OWNER'S RIGHT TO CANCEL/NOTICE OF CANCELLATION
            </h1>
            <h1 align='center' style="font-size: 18px">THREE BUSINESS DAY RIGHT OF RECISSION NOTICE </h1>
            <p>Date of transaction: {{ $data['owners_right_to_cancel']['dateOfTransaction'] }}</p>
            <p>You may cancel this transaction, without any penalty or obligation, within three business days from the
                above date. If you cancel, any property traded in, any payments made by you under the contract or sale,
                and any negotiable instrument executed
                by you will be returned within ten business days following receipt by the seller of your cancellation
                notice, and any security interest arising out of the transaction will be cancelled. If you cancel, you
                must make available to the seller
                at your residence in substantially as good condition as when received, any goods delivered to you under
                this contract or sale; or you may, if you wish, comply with the instructions of the seller regarding the
                return shipment of the goods
                at the seller's expense and risk. If you do make the goods available to the seller and the seller does
                not pick them up within twenty days of the date of your notice of cancellation, you may retain or
                dispose of the goods without any further
                obligation. If you fail to make the goods available to the seller, or if you agree to return the goods
                to the seller and fail to do so, then you remain liable for performance of all obligations under the
                contract. To cancel this transaction,
                mail or deliver a signed and dated copy of this cancellation notice or any other written notice, or send
                a telegram to American Remodeling Enterprises Inc. (Contractor), at 1563 Long Run Road, Schuylkill
                Haven, PA 17972 (Contractor's place
                of business) not later than midnight of {{ $data['owners_right_to_cancel']['cancellationLastDate'] }}
                (date).</p>
            <p>I hereby cancel this transaction. </p>
            <table style="width: 100%;">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th></th>
                    </tr>
                </thead>
                <thead>
                    <tr>
                        <th></th>
                        <th>Owner's signature</th>
                    </tr>
                </thead>
            </table>
            <p align='center'>Copyright — HICPA Compliance; LLC 2009 — All Rights Reserved</p>
            <table style="width: 100%;">
                <thead>
                    <tr>
                        <th>Contractor Initials: <img
                                src="data:image/png;base64,{{ $data['contractor_signature'] }}"
                                height="50" width="50" /></th>
                        <th>Home Owners Initials: <img
                            src="data:image/png;base64,{{ $data['owner_signature'] }}" height="50"
                                width="50" /></th>
                    </tr>
                </thead>
            </table>
        </div>
    </section>

    <section style=" width: 100%; margin: auto;">
        <div style="margin-top: 2rem; border: 2px solid black; padding: 10px 20px 10px 20px;">
            <h1 align='center' style="font-size: 18px">Anticipated Start Dates </h1>
            <p>Start date on contract is not exact start date. The actual start date will more than likely change due to
                many factors including but not limited to weather, material delays, labor delays, etc. DO NOT TAKE OFF
                WORK ON THE DAYS STATED ON CONTRACT
                AS THEY ARE ANTICIPATED ATTHE TIME OF SIGNING THE CONTRACT; you will receive an exact start date from
                the office at a later time. Again DO NOT TAKE OFF WORK ON THE DAYS STATED ON THE CONTRACT AS THEY ARE
                ANTICIPATED AT THE TIME OF SIGNING
                THE CONTRACT.
            </p>

            <p align="center">HOMEOWNER <img src="data:image/png;base64,{{ $data['owner_signature'] }}" height="50" width="50" /> DATE {{ date('d/m/Y') }} </p>
            <p align="center">COMPANY <img src="data:image/png;base64,{{ $data['contractor_signature'] }}" height="50" width="50" /> REP DATE {{ date('d/m/Y') }}</p>
        </div>
    </section>
</body>

</html>
