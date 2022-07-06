package org.openapitools.model;

import java.net.URI;
import java.util.Objects;
import com.fasterxml.jackson.annotation.JsonProperty;
import com.fasterxml.jackson.annotation.JsonCreator;
import com.fasterxml.jackson.annotation.JsonValue;
import java.util.ArrayList;
import java.util.List;
import com.fasterxml.jackson.annotation.JsonTypeName;
import org.openapitools.jackson.nullable.JsonNullable;
import java.time.OffsetDateTime;
import javax.validation.Valid;
import javax.validation.constraints.*;
import io.swagger.v3.oas.annotations.media.Schema;


import java.util.*;
import javax.annotation.Generated;

/**
 * SupermarketInfo
 */

@Generated(value = "org.openapitools.codegen.languages.SpringCodegen", date = "2022-07-07T10:48:37.835411Z[Etc/UTC]")
public class SupermarketInfo implements ShopInfo {

  /**
   * Gets or Sets tags
   */
  public enum TagsEnum {
    FOOD("food"),
    
    SPICES("spices");

    private String value;

    TagsEnum(String value) {
      this.value = value;
    }

    @JsonValue
    public String getValue() {
      return value;
    }

    @Override
    public String toString() {
      return String.valueOf(value);
    }

    @JsonCreator
    public static TagsEnum fromValue(String value) {
      for (TagsEnum b : TagsEnum.values()) {
        if (b.value.equals(value)) {
          return b;
        }
      }
      throw new IllegalArgumentException("Unexpected value '" + value + "'");
    }
  }

  @JsonProperty("tags")
  private TagsEnum tags;

  @JsonProperty("vendors")
  @Valid
  private List<String> vendors = null;

  public SupermarketInfo tags(TagsEnum tags) {
    this.tags = tags;
    return this;
  }

  /**
   * Get tags
   * @return tags
  */
  
  @Schema(name = "tags", required = false)
  public TagsEnum getTags() {
    return tags;
  }

  public void setTags(TagsEnum tags) {
    this.tags = tags;
  }

  public SupermarketInfo vendors(List<String> vendors) {
    this.vendors = vendors;
    return this;
  }

  public SupermarketInfo addVendorsItem(String vendorsItem) {
    if (this.vendors == null) {
      this.vendors = new ArrayList<>();
    }
    this.vendors.add(vendorsItem);
    return this;
  }

  /**
   * Get vendors
   * @return vendors
  */
  
  @Schema(name = "vendors", required = false)
  public List<String> getVendors() {
    return vendors;
  }

  public void setVendors(List<String> vendors) {
    this.vendors = vendors;
  }

  @Override
  public boolean equals(Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    SupermarketInfo supermarketInfo = (SupermarketInfo) o;
    return Objects.equals(this.tags, supermarketInfo.tags) &&
        Objects.equals(this.vendors, supermarketInfo.vendors);
  }

  @Override
  public int hashCode() {
    return Objects.hash(tags, vendors);
  }

  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class SupermarketInfo {\n");
    sb.append("    tags: ").append(toIndentedString(tags)).append("\n");
    sb.append("    vendors: ").append(toIndentedString(vendors)).append("\n");
    sb.append("}");
    return sb.toString();
  }

  /**
   * Convert the given object to string with each line indented by 4 spaces
   * (except the first line).
   */
  private String toIndentedString(Object o) {
    if (o == null) {
      return "null";
    }
    return o.toString().replace("\n", "\n    ");
  }
}

