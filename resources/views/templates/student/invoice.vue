<div class="page-container">
    <main class="main-content">
        <div id="invoice-app">
            <div class="header">
                <div>
                    <h1>Invoice Builder</h1>
                    <p>Date:  <input type="date" v-model="invoiceDate"></p>
                </div>
                <div>
                    <div class="section-spacer">
                        <input type="text" placeholder="Company Name" class="company-name" v-model="company.name">
                        <textarea v-on:keyup="adjustTextAreaHeight" v-model="company.contact"></textarea>
                    </div>
                    <div class="section-spacer">
                        <p><strong>Bill to:</strong></p>
                        <textarea v-on:keyup="adjustTextAreaHeight" v-model="client"></textarea>
                    </div>
                </div>
            </div>
            <div>
                <label for="currency-picker">Currency:</label>
                <select id="currency-picker" v-model="invoiceCurrency">
                    <option v-for="currency in currencies" :value="currency">{{ currency.code }} - {{ currency.name }}</option>
                </select>
            </div>
            <table class="responsive-table">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Item</th>
                    <th>Price/unite</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th></th>
                </tr>
                </thead>
                <tr v-for="(item, index) in items">
                    <td data-label="No">{{ index + 1 }}</td>
                    <td data-label="Item"><input type="text" v-model="item.description" /></td>
                    <td data-label="Price/unite"><div class="cell-with-input">{{ invoiceCurrency.symbol }} <input type="number" min="0" v-model="item.price" /></div></td>
                    <td data-label="Quantity"><input type="number" min="0" v-model="item.quantity" /></td>
                    <td data-label="Total">{{ decimalDigits(item.price * item.quantity) }}</td>
                    <td class="text-right"><button class="is-danger" v-on:click="deleteItem(index)">Delete item</button></td>
                </tr>
            </table>
            <button v-on:click="addNewItem">Add item</button>
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>{{ decimalDigits(subTotal) }}</td>
                </tr>
                <tr>
                    <td><div class="cell-with-input">Discount <input class="text-right" type="number" min="0" max="100" v-model="discountRate" />%</div></td>
                    <td>{{ decimalDigits(discountTotal) }}</td>
                </tr>
                <tr>
                    <td><div class="cell-with-input">Tax <input class="text-right" type="number" min="0" max="100" v-model="taxRate" />%</div></td>
                    <td>{{ decimalDigits(taxTotal) }}</td>
                </tr>
                <tr class="text-bold">
                    <td>Grand Total</td>
                    <td>{{ decimalDigits(grandTotal) }}</td>
                </tr>
            </table>
            <div class="section-spacer">
                <p>Notes:</p>
                <textarea v-on:keyup="adjustTextAreaHeight"></textarea>
            </div>

            <div class="section-spacer">
                <p>Terms:</p>
                <textarea v-on:keyup="adjustTextAreaHeight"></textarea>
            </div>
            <button v-on:click="printInvoice">Print Invoice</button>
        </div>

    </main>
</div>
