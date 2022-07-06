/*
 * OneOf
 *
 * OneOf
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

using System;
using System.Linq;
using System.IO;
using System.Text;
using System.Text.RegularExpressions;
using System.Collections;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.Runtime.Serialization;
using Newtonsoft.Json;
using Newtonsoft.Json.Converters;
using System.ComponentModel.DataAnnotations;
using OpenAPIDateConverter = Org.OpenAPITools.Client.OpenAPIDateConverter;

namespace Org.OpenAPITools.Model
{
    /// <summary>
    /// SupermarketInfo
    /// </summary>
    [DataContract]
    public partial class SupermarketInfo :  IEquatable<SupermarketInfo>, IValidatableObject
    {
        /// <summary>
        /// Defines Tags
        /// </summary>
        [JsonConverter(typeof(StringEnumConverter))]
        public enum TagsEnum
        {
            /// <summary>
            /// Enum Food for value: food
            /// </summary>
            [EnumMember(Value = "food")]
            Food = 1,

            /// <summary>
            /// Enum Spices for value: spices
            /// </summary>
            [EnumMember(Value = "spices")]
            Spices = 2

        }

        /// <summary>
        /// Gets or Sets Tags
        /// </summary>
        [DataMember(Name="tags", EmitDefaultValue=false)]
        public TagsEnum? Tags { get; set; }
        /// <summary>
        /// Initializes a new instance of the <see cref="SupermarketInfo" /> class.
        /// </summary>
        /// <param name="tags">tags.</param>
        /// <param name="vendors">vendors.</param>
        public SupermarketInfo(TagsEnum? tags = default(TagsEnum?), List<string> vendors = default(List<string>))
        {
            this.Tags = tags;
            this.Vendors = vendors;
        }


        /// <summary>
        /// Gets or Sets Vendors
        /// </summary>
        [DataMember(Name="vendors", EmitDefaultValue=false)]
        public List<string> Vendors { get; set; }

        /// <summary>
        /// Returns the string presentation of the object
        /// </summary>
        /// <returns>String presentation of the object</returns>
        public override string ToString()
        {
            var sb = new StringBuilder();
            sb.Append("class SupermarketInfo {\n");
            sb.Append("  Tags: ").Append(Tags).Append("\n");
            sb.Append("  Vendors: ").Append(Vendors).Append("\n");
            sb.Append("}\n");
            return sb.ToString();
        }

        /// <summary>
        /// Returns the JSON string presentation of the object
        /// </summary>
        /// <returns>JSON string presentation of the object</returns>
        public virtual string ToJson()
        {
            return Newtonsoft.Json.JsonConvert.SerializeObject(this, Newtonsoft.Json.Formatting.Indented);
        }

        /// <summary>
        /// Returns true if objects are equal
        /// </summary>
        /// <param name="input">Object to be compared</param>
        /// <returns>Boolean</returns>
        public override bool Equals(object input)
        {
            return this.Equals(input as SupermarketInfo);
        }

        /// <summary>
        /// Returns true if SupermarketInfo instances are equal
        /// </summary>
        /// <param name="input">Instance of SupermarketInfo to be compared</param>
        /// <returns>Boolean</returns>
        public bool Equals(SupermarketInfo input)
        {
            if (input == null)
                return false;

            return 
                (
                    this.Tags == input.Tags ||
                    (this.Tags != null &&
                    this.Tags.Equals(input.Tags))
                ) && 
                (
                    this.Vendors == input.Vendors ||
                    this.Vendors != null &&
                    input.Vendors != null &&
                    this.Vendors.SequenceEqual(input.Vendors)
                );
        }

        /// <summary>
        /// Gets the hash code
        /// </summary>
        /// <returns>Hash code</returns>
        public override int GetHashCode()
        {
            unchecked // Overflow is fine, just wrap
            {
                int hashCode = 41;
                if (this.Tags != null)
                    hashCode = hashCode * 59 + this.Tags.GetHashCode();
                if (this.Vendors != null)
                    hashCode = hashCode * 59 + this.Vendors.GetHashCode();
                return hashCode;
            }
        }

        /// <summary>
        /// To validate all properties of the instance
        /// </summary>
        /// <param name="validationContext">Validation context</param>
        /// <returns>Validation Result</returns>
        IEnumerable<System.ComponentModel.DataAnnotations.ValidationResult> IValidatableObject.Validate(ValidationContext validationContext)
        {
            yield break;
        }
    }

}
