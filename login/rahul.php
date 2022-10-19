<div>
<table
                           style="border: 1px solid black; width:100%; margin-top:-20px">
			                        <tr style="width:100%">
			                            <td style="border: 1px solid black;  width:50%; padding:3px; border-top: hidden; border-right: hidden; border-left: hidden;border-bottom: hidden;"
			                                class="text-left" colspan="2">
			                                <span>
			                                    <img t-if="docs.company_id.logo"
			                                         t-att-src="'data:image/png;base64,%s' % to_text(docs.company_id.logo)"
			                                         style="width:110px; height:70px;"/>
			                                </span>
			                            </td>
			                            <td style="border: 1px solid black;  width:50%; padding:3px; border-top: hidden; border-right: hidden; border-left: hidden;border-bottom: hidden;"
			                                class="text-right" colspan="2">
			                                <h4>
			                                    <b>
			                                        <t t-if="docs.company_id">
			                                            <span t-esc="docs.company_id.name.upper()"/>
			                                        </t>
			                                    </b>
			                                </h4>
			                            </td>
			                        </tr>
                    </table>
</div>







