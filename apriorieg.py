
# Import necessary libraries
from mlxtend.preprocessing import TransactionEncoder
from mlxtend.frequent_patterns import apriori, association_rules
import pandas as pd

# Define the dataset
Items = ['item1', 'item2', 'item3', 'item4']
Transactions = [
    ['item1', 'item2', 'item3'],
    ['item2', 'item3'],
    ['item1', 'item2', 'item4'],
    ['item1', 'item4'],
    ['item2', 'item3', 'item4'],
    ['item1', 'item3', 'item4'],
    ['item1', 'item2'],
    ['item1', 'item3'],
    ['item3', 'item4'],
    ['item2', 'item4']
]

# **Convert the transactions into a binary matrix**
te = TransactionEncoder()
te_ary = te.fit_transform(Transactions)

# **Convert the binary matrix into a pandas DataFrame**
df = pd.DataFrame(te_ary, columns=te.columns_)

# **Generate frequent itemsets with a minimum support of 0.3**
frequent_itemsets = apriori(df, min_support=0.3, use_colnames=True)

# **Generate association rules with a minimum confidence of 0.7**
association_rules_df = association_rules(frequent_itemsets, metric="confidence", min_threshold=0.7)

# **Print the frequent itemsets and association rules**
print("Frequent Itemsets:")
print(frequent_itemsets)

print("\nAssociation Rules:")
print(association_rules_df)
